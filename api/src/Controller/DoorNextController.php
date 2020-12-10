<?php

namespace App\Controller;

use App\Entity\Door;
use App\Entity\Game;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class DoorNextController
{
    public function __invoke(Game $data, Request $request, EntityManagerInterface $em)
    {
        //Start the game
        if (null === $data->timerStart) {
            $doorCount = 20;
            $data->doors = $em->getRepository(Door::class)->findBy([], null, $doorCount);
            //shuffle($data->doors);

            $data->remainingDoorsCount = $doorCount;
            $data->timerStart = new \DateTime();
            // Give an extra 1 seconds
            $data->timerStart->add(new \DateInterval('P0DT0H0M1S'));
        } else {
            foreach (Game::SYMBOLS as $symbol) {
                $requirement = count(array_keys($data->getCurrentDoor()->symbols, $symbol));
                $playgroundSymbols = 0;

                foreach ($data->playground as $skillOnPlayground) {
                    $playgroundSymbols += count(array_keys($skillOnPlayground, $symbol));
                }

                if ($requirement > $playgroundSymbols) {
                    throw new BadRequestHttpException("Not enough $symbol, $playgroundSymbols on the playground, $requirement needed");
                }
            }

            if (0 == $data->remainingDoorsCount) {
                throw new BadRequestHttpException('Not implemented yet');
            }
        }

        --$data->remainingDoorsCount;
        $data->playground = [];

        $em->flush();

        return $data;
    }
}

<?php

namespace App\Controller\Admin;

use App\Entity\Door;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin_home")
     */
    public function index(): Response
    {
        $routeBuilder = $this->get(CrudUrlGenerator::class)->build();

        return $this->redirect($routeBuilder->setController(DoorCrudController::class)->generateUrl());

    }

    public function configureMenuItems(): iterable
    {
            yield MenuItem::linkToCrud('Door', 'fa fa-user', Door::class)->setDefaultSort(['name' => 'DESC']);

    }
    public function configureDashboard(): Dashboard
    {
        $dashboard = Dashboard::new();

        $dashboard->setTitle('Admin ');


        return $dashboard;
    }
}

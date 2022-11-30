<div class="container-fluid p-0">

    <h1 class="h3 mb-3 text-center"><strong>Analytics</strong> Dashboard</h1>

    

    <div class="row">
        <div class="col-sm-12 d-flex">
            <div class="w-100">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Total Products</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="truck"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">{{$allProducts}}</h1>
                               
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Total Customers</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="users"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">{{$allUsers}}</h1>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Total Orders</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="users"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">{{$allorders}}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Total Income</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="dollar-sign"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">${{$totalIncome}}</h1>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Total Orders Not Deliverd</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="shopping-cart"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">64</h1>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Total Orders Deliverd</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle text-danger" data-feather="truck"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">{{$odersDeliverd}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>



    <!-- <div class="col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">

                <h5 class="card-title mb-0">Latest Projects</h5>
            </div>
            <table class="table table-hover my-0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th class="d-none d-xl-table-cell">Start Date</th>
                        <th class="d-none d-xl-table-cell">End Date</th>
                        <th>Status</th>
                        <th class="d-none d-md-table-cell">Assignee</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Project Apollo</td>
                        <td class="d-none d-xl-table-cell">01/01/2021</td>
                        <td class="d-none d-xl-table-cell">31/06/2021</td>
                        <td><span class="badge bg-success">Done</span></td>
                        <td class="d-none d-md-table-cell">Vanessa Tucker</td>
                    </tr>
                    <tr>
                        <td>Project Fireball</td>
                        <td class="d-none d-xl-table-cell">01/01/2021</td>
                        <td class="d-none d-xl-table-cell">31/06/2021</td>
                        <td><span class="badge bg-danger">Cancelled</span></td>
                        <td class="d-none d-md-table-cell">William Harris</td>
                    </tr>
                    <tr>
                        <td>Project Hades</td>
                        <td class="d-none d-xl-table-cell">01/01/2021</td>
                        <td class="d-none d-xl-table-cell">31/06/2021</td>
                        <td><span class="badge bg-success">Done</span></td>
                        <td class="d-none d-md-table-cell">Sharon Lessman</td>
                    </tr>
                    <tr>
                        <td>Project Nitro</td>
                        <td class="d-none d-xl-table-cell">01/01/2021</td>
                        <td class="d-none d-xl-table-cell">31/06/2021</td>
                        <td><span class="badge bg-warning">In progress</span></td>
                        <td class="d-none d-md-table-cell">Vanessa Tucker</td>
                    </tr>
                    <tr>
                        <td>Project Phoenix</td>
                        <td class="d-none d-xl-table-cell">01/01/2021</td>
                        <td class="d-none d-xl-table-cell">31/06/2021</td>
                        <td><span class="badge bg-success">Done</span></td>
                        <td class="d-none d-md-table-cell">William Harris</td>
                    </tr>
                    <tr>
                        <td>Project X</td>
                        <td class="d-none d-xl-table-cell">01/01/2021</td>
                        <td class="d-none d-xl-table-cell">31/06/2021</td>
                        <td><span class="badge bg-success">Done</span></td>
                        <td class="d-none d-md-table-cell">Sharon Lessman</td>
                    </tr>
                    <tr>
                        <td>Project Romeo</td>
                        <td class="d-none d-xl-table-cell">01/01/2021</td>
                        <td class="d-none d-xl-table-cell">31/06/2021</td>
                        <td><span class="badge bg-success">Done</span></td>
                        <td class="d-none d-md-table-cell">Christina Mason</td>
                    </tr>
                    <tr>
                        <td>Project Wombat</td>
                        <td class="d-none d-xl-table-cell">01/01/2021</td>
                        <td class="d-none d-xl-table-cell">31/06/2021</td>
                        <td><span class="badge bg-warning">In progress</span></td>
                        <td class="d-none d-md-table-cell">William Harris</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> -->



</div>
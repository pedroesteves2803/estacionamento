
<div class="iq-card p-4">
    <div class="iq-card-header d-flex justify-content-between">
        <div class="iq-header-title">
            <h4 class="card-title">Lista de administradores</h4>
        </div>
    </div>
    <div class="iq-card-body">
        <div class="table-responsive">
            <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($adminUsers as $adminUser)
                    <tr>
                    <td>{{$adminUser->name}}</td>
                    <td>{{$adminUser->email}}</td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
    </div>

<?=$this->extend('template/index');?>
<?=$this->section('content');?>
<div ng-controller="periodeController">
    <button type="button" class="btn btn-primary btn-sm mb-2" data-toggle="modal" data-target="#modelId">
        Tambah
    </button>
    <div class="card">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Periode</th>
                    <th>Tanggal Buka</th>
                    <th>Tanggal Tutup</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat="item in datas">
                    <td>{{$index+1}}</td>
                    <td>{{item.periode}}</td>
                    <td>{{item.tanggal_buka | date:'EEEE, d MMMM y'}}</td>
                    <td>{{item.tanggal_tutup | date:'EEEE, d MMMM y'}}</td>
                    <td>{{item.status=='1' ? 'Dibuka': 'Ditutup'}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" ng-submit="save(model)">
                        <div class="form-group">
                            <label for="">Periode</label>
                            <input class="form-control" type="text" placeholder="Periode" ng-model="model.periode">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Buka</label>
                            <input class="form-control" type="date" placeholder="Tanggal Buka">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Tutup</label>
                            <input class="form-control" type="date" placeholder="Tanggal Tutup">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="Status" id="">
                                <option value="">Dibuka</option>
                                <option value="">Ditutup</option>
                            </select>
                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?=$this->endSection();?>
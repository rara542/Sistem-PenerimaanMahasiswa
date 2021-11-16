angular.module("admin.controllers", [])
    .controller("tahapanController", tahapanController)
    .controller("mahasiswaController", mahasiswaController);

function tahapanController($scope, tahapanServices) {
    $scope.datas = [];
    tahapanServices.get().then(res => {
        $scope.datas = res;
        console.log(res);
    })
}
function mahasiswaController($scope, mahasiswaServices) {

    var controller = helperServices.url + 'mahasiswa/';
    var service = {}
    ServiceWorker.data = [];
    return {
        get: get, post: post, put: put, deleted: deleted
    }
    function get() {
        var def = $q.defer();
        $http({
            method: 'get',
            url: controller + "/read",
            headers: { 'Content-Type': 'application/json' }
        }).then((res) => {
            service.data = res.data;
            def.resolve(res.data)
        }, (err) => {
            def.reject(err);
        })
        return def.promise;
    }
    function post(param) {
        var def = $q.defer();
        $http({
            method: 'post',
            url: controller + "/post",
            data: param,
            headers: { 'Content-Type': 'application/json' }
        }).then((res) => {
            service.data.push(res.data);
            def.resolve(res.data)
        }, (err) => {
            def.reject(err);
        })
        return def.promise;
    }
    function put(param) {
        var def = $q.defer();
        $http({
            method: 'put',
            url: controller + "/put/" + param.id,
            data: param,
            headers: { 'Content-Type': 'application/json' }
        }).then((res) => {
            var data = service.data.find(x => x.id == param.id);
            if (data) {
                data.nama_mahasiswa = param.nama_mahasiswa;
                data.tempat_lahir = param.tempat_lahir;
                data.tanggal_lahir = param.tanggal_lahir;
                data.jenis_kelamin = param.jenis_kelamin;
                data.agama = param.agama;
            }
            def.resolve(res.data)
        }, (err) => {
            def.reject(err);
        })
        return def.promise;
    }
    function deleted(param) {
        var def = $q.defer();
        $http({
            method: 'get',
            url: controller + "/delete/" + param.id,
            headers: { 'Content-Type': 'application/json' }
        }).then((res) => {
            var data = service.data.find(x => x.id == param.id);
            if (data) {
                var index = service.data.indexOf(data);
                service.data.splice(index, 1);
            }
            def.resolve(res.data)
        }, (err) => {
            def.reject(err);
        })
        return def.promise;
    }
}
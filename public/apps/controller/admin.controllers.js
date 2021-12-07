angular.module("admin.controllers", [])
    .controller("periodeController", periodeController);

function periodeController($scope, periodeServices) {
    $scope.datas = [];
    $scope.model = {};
    periodeServices.get().then(res => {
        $scope.datas = res;
        console.log(res);
    })

    $scope.save = (item) => {
        periodeServices.post(item).then((res) => {
            $scope.model = {};
            $("#tambah").modal("hide");
        }
    })
}
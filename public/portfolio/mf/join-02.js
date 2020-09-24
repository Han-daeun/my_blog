function checkBox__init() {
    $("#checkbox1").click(function(){
        if($("#checkbox1").prop("checked")){
            $("input[name=chk]").prop("checked",true);
        }else{
            $("input[name=chk]").prop("checked",false);
        }
    });
}

$(function () {
    checkBox__init();
});
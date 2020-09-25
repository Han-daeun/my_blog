// function checkBox__init() {
//     $("#checkbox1").click(function(){
//         if($("#checkbox1").prop("checked")){
//             $("input[name=checkOne]").prop("checked",true);
//         }else{
//             $("input[name=checkOne]").prop("checked",false);
//         }
//     });
// }

// $(function () {
//     checkBox__init();
// });

// 모두 => 동기화
function allCheckFunc( obj ) {
    $("[name=checkOne]").prop("checked", $(obj).prop("checked") );
}

// 체크박스 체크시 전체선택 체크 여부 
function oneCheckFunc( obj )
{
    var allObj = $("[name=checkAll]");
    var objName = $(obj).attr("name");

    if( $(obj).prop("checked") )
    {
        checkBoxLength = $("[name="+ objName +"]").length;
        checkedLength = $("[name="+ objName +"]:checked").length;
        
        // console.log("checkBoxLength : " + checkBoxLength + ", checkedLength : " + checkedLength);
        // 확인용

        if( checkBoxLength == checkedLength ) {
            allObj.prop("checked", true);
        } else {
            allObj.prop("checked", false);
        }
    }
    else
    {
        allObj.prop("checked", false);
    }
}

$(function(){
    $("[name=checkAll]").change(function(){
        allCheckFunc( this );
    });
    
    $("[name=checkOne]").change(function(){
        oneCheckFunc($(this));
    });
});
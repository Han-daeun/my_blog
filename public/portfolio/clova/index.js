/* 풀페이지 */
function FullPage() {

$(document).ready(function () {
    $('#fullpage').fullpage({
        navigation: true,
        navigationPosition: 'left',
        anchors: ['anchor1', 'anchor2', 'anchor3', 'anchor4', 'anchor5']
    });
});

}
  
$(function () {
    FullPage();
});

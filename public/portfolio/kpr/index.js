/* 풀페이지 */
function FullPage() {

    $(document).ready(function () {
        $('#fullpage').fullpage({
            autoScrolling:false,
            navigation: true,
            navigationPosition: 'right',
            anchors: ['anchor1', 'anchor2', 'anchor3', 'anchor4', 'anchor5']
        });
    });
    
    }

    $(function () {
        FullPage();
    });
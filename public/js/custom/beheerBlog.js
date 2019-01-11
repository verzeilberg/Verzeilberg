$(document).ready(function () {

    //Function to set blog online
    function setBlogOnline() {
        $("span#blogOffline").removeClass('blogOfflineActive');
        $("span#blogOnline").addClass('blogOnlineActive');
        $('input[name=online]').val(1);
    }

    //Function to set blog offline
    function setBlogOffline() {
        $("span#blogOnline").removeClass('blogOnlineActive');
        $("span#blogOffline").addClass('blogOfflineActive');
        $('input[name=online]').val(0);
    }

    //Function to check if a blog is online or offline
    function checkOfflineOnline() {
        var onlineValue = $('input[name=online]').val();
        if (onlineValue == 1) {
            setBlogOnline();
        } else {
            setBlogOffline();
        }
    }


    //Check is blog is online or offline when page loads
    checkOfflineOnline();

//Set blog offline
    $("span#blogOffline").on("click", function () {
        setBlogOffline()
    });

//Set blog online
    $("span#blogOnline").on("click", function () {
        setBlogOnline();
    });

//Create well design file upload form file
    $(document).on('change', ':file', function () {
        var input = $(this),
                numFiles = input.get(0).files ? input.get(0).files.length : 1,
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [numFiles, label]);

        $('input[name=blogImageFileName]').val(label);
    });

//Sortable function
    $.getScript('https://code.jquery.com/ui/1.12.1/jquery-ui.js', function ()
    {
        $(".grid").sortable({
            tolerance: 'pointer',
            revert: 'invalid',
            forceHelperSize: true,
            stop: function (event, ui) {
                var imageId;
                var images = [];
                $("div#sortableItems div.tile").each(function (index) {
                    imageId = $(this).children('div').children('div').children('span.editImage').data('imageid');
                    images.push(imageId);
                });
                $.ajax({
                    type: 'POST',
                    data: {
                        images: images,
                    },
                    url: "/ajaximage/sortImages",
                    async: true,
                    success: function (data) {
                        if (data.succes === true) {
                        } else {
                            alert('fout');
                        }

                    }
                });
            }
        });
    });

});
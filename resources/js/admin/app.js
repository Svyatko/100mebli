'use strict';
var app = {};

app.core = {};

app.ui = {};

app.content = {
    addValue: function () {
        $(document.body).delegate('.js-add-value', 'click', function () {
            // var inputs = $('.js-put-values');
            var inputs = $(this).closest('.field__repeater').find('.js-put-values');
            var lang = $(this).data('lang');

            var $input = `
                <div class="form-group">
                    <div class="input-group mb-1">
                        <input class="form-control" name="values[`+lang+`][]">
                        <span class="js-remove-value">
                            <a href="javascript:;" class="btn btn-danger">
                                <i class="fas fa-times"></i>
                            </a>
                        </span>
                    </div>
                </div>
            `;

            inputs.append($input);
        });
    },
    removeValue: function () {
        $(document.body).delegate('.js-remove-value', 'click', function () {
            $(this).parent('.input-group').remove();
        });
    },
    metaKeywords: function () {
        $('.js-keywords').each(function(numb,el){
            $(el).select2({
                tags: true,
                width: 'resolve',
                tokenSeparators: [','],
                dropdownCssClass: 'select2-hidden',
                containerCssClass: 'select2-keywords'
            });
            $(el).trigger('select2.inited');
        });

    },
    fields: function () {
        $('.js-select2-fields').each(function(numb,el){
            $(el).select2();
        });

    },
    imageRemove: function () {
        $(document.body).delegate('.js-remove-image', 'submit', function () {
            var data = $(this).serialize();
            var url = $(this).attr('action');
            var type = $(this).attr('method');

            $(this).parents('.col-md-2').remove();

            $.ajax({
                url: url,
                type: type,
                data: data,
            });

            return false;
        })
    }
};

$(function () {
    // Content
    app.content.addValue();
    app.content.removeValue();
    app.content.metaKeywords();
    app.content.fields();
    app.content.imageRemove();
});

$(window).on('resize', function () {

});

$(window).on('orientationchange', function () {

});


// $(document).ready(function() {
//     $("input:file").change(function (){
//         var fileName = $(this).val();
//         if(fileName.match(/fakepath/)) {
//             fileName = fileName.replace(/C:\\fakepath\\/i, '');
//         }
//         $(".upload-file label span").html(fileName);
//     });
// });
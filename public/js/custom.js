(function($) {
    'use strict';

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).on('change','select[name=shareholder_company_id]',function(){
        var shareholder_company_id = $(this).val();
        var ajaxUrl = $(this).data('action');
        $.ajax({
            url: ajaxUrl,
            type: "POST",
            dataType: "json",
            data: {
                'shareholder_company_id' : shareholder_company_id
            },
            success: function(response) {  
                location.reload();                
            },
            error: function(xhr, status, error){
            }
        });
    });

    $(document).on('click','.selectShareHolderCheckAll',function(){
        $(".selectShareHolderCheck").prop('checked', $(this).is(":checked"));
    });

    $(document).on('click','.downloadBulkCert',function(){
        var bulk_share_holder_ids = [];
        $(".selectShareHolderCheck").each(function(){
            if( $(this).is(":checked") ){
                bulk_share_holder_ids.push($(this).val());
            }
        });

        if(bulk_share_holder_ids.length == 0 ){
            notify('Please select shareholders','danger');
            return;
        }        

        var ajaxUrl = $(this).data('action');

        $.ajax({
            url: ajaxUrl,
            type: "POST",
            dataType: "json",
            data: {
                'bulk_share_holder_ids' : bulk_share_holder_ids
            },
            success: function(response) {  
                notify('Added to export queue, We will notify you once download ready.','success');
                $(".selectShareHolderCheckAll").prop('checked', false);
                $(".selectShareHolderCheck").prop('checked', false);
            },
            error: function(xhr, status, error){
                notify('Something went wrong','danger');
            }
        });



    });
    
})(jQuery);

/*Declare Globally */
function delete_notifier(event,elmId,msg)
{
    event.preventDefault();

    var r = confirm(msg);
    if (r == true) 
    {
        document.getElementById(elmId).submit();
    }
    
}

function notify(msg,type) {
    $.notify({
        icon: '',
        title: '',
        message: msg,
        url: ''
    }, {
        element: 'body',
        type: type,
        allow_dismiss: true,
        placement: {
            from: 'top',
            align: 'right'
        },
        offset: {
            x: 30,
            y: 150
        },
        spacing: 10,
        z_index: 999999,
        delay: 2500,
        timer: 1000,
        url_target: '_blank',
        mouse_over: false,
        animate: {
            enter: 'animated bounceInRight',
            exit: 'animated bounceOutRight'
        },
        icon_type: 'class',
            template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
                        '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
                        '<span data-notify="icon"></span> ' +
                        '<span data-notify="title">{1}</span> ' +
                        '<span data-notify="message">{2}</span>' +
                        '<div class="progress" data-notify="progressbar">' +
                            '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                        '</div>' +
                        '<a href="{3}" target="{4}" data-notify="url"></a>' +
                    '</div>'
    });
}

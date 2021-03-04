$('.delete').on('click',function(e){

    e.preventDefault();
    let id = $(this).attr('dataid');
    let url = $('#baseurl').val();
    let rolebtn = $(this).attr('rolethisbutton');

    switch (rolebtn) {
        case "posts":
            url = $('#baseurl').val()+'cms-admin/posts/delete/'+id;
            break;
        case "categorys":
            url = $('#baseurl').val()+'cms-admin/category/delete/'+id;
            break;
        case "users":
            url = $('#baseurl').val()+'cms-admin/users/delete/'+id;
            break;
        
        default:
            break;
    }

    $.ajax(
    {
        type: "POST",
        data:{'id':id},
        dataType: 'json',
        url: url,
        timeout:'15000',
        success: function(result,status,xhr)
        {
            if (xhr.status == 200) {
                if (result.code == 1) {
                    showNotification('bg-green', result.messages, 'bottom', 'left', 'animated fadeInDown', 'animated fadeOutUp');
                    $('#cell'+id).remove();
                }else{
                    showNotification('bg-red', result.messages, 'bottom', 'left', 'animated fadeInDown', 'animated fadeOutUp');
                }
            } else {
                showNotification('bg-red', xhr.statusText, 'bottom', 'left', 'animated fadeInDown', 'animated fadeOutUp');
            }
            
        },
        error: function(xhr,status,error)
        {
            showNotification('bg-red', xhr.statusText, 'bottom', 'left', 'animated fadeInDown', 'animated fadeOutUp');
        }
    }); 
})

$('.edit').on('click',function(e){

    e.preventDefault();
    let id = $(this).attr('dataid');
    let url = $('#baseurl').val();
    let rolebtn = $(this).attr('rolethisbutton');

    switch (rolebtn) {
        case "posts":
            url = $('#baseurl').val()+'cms-admin/posts/status/'+id;
            break;
        case "categorys":
            url = $('#baseurl').val()+'cms-admin/category/status/'+id;
            break;
        case "users":
            url = $('#baseurl').val()+'cms-admin/users/status/'+id;
            break;
        
        default:
            break;
    }

    $.ajax({
            type: "POST",
            data:{'id':id},
            dataType: 'json',
            url: url,
            timeout:'15000',
            success: function(result,status,xhr)
            {
                if (xhr.status == 200) {
                    if (result.code == 1) {
                        showNotification('bg-green', result.messages, 'bottom', 'left', 'animated fadeInDown', 'animated fadeOutUp');
                        
                        if (result.result.status == 1) {
                            $( '#span'+id ).replaceWith( "<span id=span"+id+">Aktif</span>" );
                        } else {
                            $( '#span'+id ).replaceWith( "<span id=span"+id+">Tidak Aktif</span>" );
                        }
                        
                    }else{
                        showNotification('bg-red', result.messages, 'bottom', 'left', 'animated fadeInDown', 'animated fadeOutUp');
                    }
                } else {
                    showNotification('bg-red', xhr.statusText, 'bottom', 'left', 'animated fadeInDown', 'animated fadeOutUp');
                }
                
            },
            error: function(xhr,status,error)
            {
                showNotification('bg-red', xhr.statusText, 'bottom', 'left', 'animated fadeInDown', 'animated fadeOutUp');
            }
    }); 

})
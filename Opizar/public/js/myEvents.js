 $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
    
    });

    $(function(){
            $('#list').sortable(
            {
                stop:function()
                { 
                    var itemID;
                    var itemIndex;

                    $.map($(this).find('tr'),function(el)
                    {
                         itemID = el.id;
                         itemIndex = $(el).index();
                        $.ajax({                            
                            type:'POST',
                            url:'/admin/home',
                            dataType:'json',
                            data:{itemID:itemID,itemIndex:itemIndex},
                        });
                    });     
                }
            });
        });
    
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $(document).ready( function() {
        $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
        });

        $('.btn-file :file').on('fileselect', function(event, label) {
            
            var input = $(this).parents('.input-group').find(':text'),
                log = label;
            
            if( input.length ) {
                input.val(log);
            } else {
                if( log ) alert(log);
            }
        
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function (e) {
                    $('#img-upload').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function(){
            readURL(this);
        });     
    });
    /* icons list Begin */
    $( document ).ready(function() {
        
        $('#myicon-list li:has(input:radio:checked)').addClass('myactive');

        $("#icondropdown").click(function()
        {
            if($('#myicon-list').hasClass('myhidde'))
            {
               $('#myicon-list').removeClass('myhidde');
            }else
            {
               $('#myicon-list').addClass('myhidde');
            }
        });

        $(".icon-list li a").click(function() {
        $(this).next().prop("checked", "checked");
        });

        $('.icon-list li a').click(function() {
                $('#myicon-list li:has(input:radio:checked)').addClass('myactive');
                $('#myicon-list li:has(input:radio:not(:checked))').removeClass('myactive');
        });
    });
    /* icons list End */

    /* buttons for language transitions Begin */
  
     $('#lang-buttons button').click(function(){
        var dataLangAttr = $(this).attr('data-lang');

        $('#lang-buttons').children().each(function(){
            $(this).removeClass('btn-primary');
        });
        $(this).addClass('btn-primary');

        $('.'+dataLangAttr).removeClass('myhidde');

        $('.parent_form').children().each(function(){
            if($(this).attr('class') != dataLangAttr ){
                $(this).addClass('myhidde'); 
            }
        });
     });
  
    /* buttons for language transitions End */


     /* delete request */

        function deletefunction(methodname,object)
        {        

                let id = $(object).attr("rel");
                alertify.confirm("Delete ?", function (e) {

                        if (e) {
                                $.ajax({
                                    type: "delete",
                                    url: methodname,
                                    data: {id:id},
                                    complete:function()
                                    {
                                        alertify.alert("Object Deleted",function(e)
                                            {
                                                if(e)
                                                {
                                                    location.reload();
                                                }
                                            });
                                    }
                                    });

                        } else {
                            return false;
                        }
                    });
        }

     /* End */

     /* Delete request from Recycle bin */

        function deletefunctionFromRecycle(methodname,object)
        {        
            let id = $(object).attr("rel");
                $.ajax({
                    type: "delete",
                    url: methodname,
                    data: {id:id},
                    complete:function()
                    {
                        alertify.alert("Object Deleted",function(e)
                            {
                                if(e)
                                {
                                    location.reload();
                                }
                            });
                    }

                    });
        }


     /* End */
     
     /* Delete all Begin*/

     function deleteAll()
     {
        $.ajax({
                    type: "delete",
                    url: "/admin/recycle/deleteAll",
                    complete:function()
                    {
                        alertify.alert("All Objects Deleted",function(e)
                            {
                                if(e)
                                {
                                    location.reload();
                                }
                            });
                    }
                });
     }

     /* End */
     
    
    
    /* Logout Begin */
    $('#logout').click(function(){
    alertify.confirm("Logout ?", function (e) {
        if(e)
        {     
            document.location.href="/logout";
        }else
        {
            return false;
        }
        });
    });
    /*End*/
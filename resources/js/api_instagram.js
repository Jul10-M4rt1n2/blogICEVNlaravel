$(document).ready(function(){
    
    var token ='IGQVJWWkFuQlBhU3AzaldSTU9IdTNNV2xNUDRUYW1rX2doMXZANZAWxmVmttd1FJdWFkQlFDSThtMC1wTi0xT19HREhBN3NLQlJzemNJY01xcDh5bXZAyaU1wbkpHeXE3cmFsUzlFa1N5VGVxcVNpTk9fRAZDZD';
    var fields = 'id,media_type,media_url,thumbnail_url,timestamp,permalink,caption';
    var limit = 12; 

    $.ajax ( {
        url: 'https://graph.instagram.com/me/media?fields='+ fields +'&access_token='+ token +'&limit='+ limit,
        type: 'GET',
        success: function( response ) {
            for( var x in response.data ) { 
                var link = response.data[x]['permalink'],
                    caption = response.data[x]['caption'],
                    image = response.data[x]['media_url'],
                    image_video = response.data[x]['thumbnail_url'],
                    html = '';
                if ( response.data[x]['media_type'] == 'VIDEO' ) { 
                   
                    html += '<div class="card border border-0 shadow img-mobile-custon" style="width: 15%;">';
                    html += '<a class="card-link" href="' + link + '" rel="noopener" target="_blank">';
                    html += '<img src="' + image_video + '" loading="lazy" alt="' + caption + '" class="img-fluid"/>';
                    html += '</a>';
                    html += '</div>'; 
                } else { 
                    html += '<div class="card border border-0 shadow img-mobile-custon" style="width: 15%;">';
                    html += '<a class="card-link" href="' + link + '" rel="noopener" target="_blank">';
                    html += '<img src="' + image + '" loading="lazy" alt="' + caption + '" class="img-fluid"/>';
                    html += '</a>';
                    html += '</div>';
                } 
                $('#instafeed').append(html);
            }
        },
        error: function(data) { 
            var html = '<div class="class-no-data">No Images Found</div>'; 
            $('#instafeed').append(html); 
            }
    }); 
});
$(document).ready(function(){
    
    var token ='IGQVJVbU9NLTBiVzZA6QjNWSVkyTzlkdWdLZADROcG9CSndwOVQ5a3NsOTZATQkk5WmVmdFZAVZAV9ncXYxZAm1SZAnBhbjd1UjRxQTlsZAm1hTDVPQ2JKVXdYWWM2NmRzRWFUZAmFyTDBOY3BnYnhvOW1DWnpTbwZDZD';
    var fields = 'id,media_type,media_url,thumbnail_url,timestamp,permalink,caption';
    var limit = 9; 

    $.ajax ( {
        url: 'https://graph.instagram.com/me/media?fields='+ fields +'&access_token='+ token,
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
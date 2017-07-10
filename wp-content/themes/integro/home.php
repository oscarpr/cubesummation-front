<?php get_header(); ?>
  <section>
    <h1><?php the_title(); ?></h1>

    <textarea rows="22" cols="50" id="content-request">
    </textarea>

    <button id="send-button" onclick="send()">Send</button>

    <div id="content-response">
       
    </div>
  </section>

<?php get_footer(); ?>

<script>
    
    function send () {
        var content = document.getElementById('content-request').value;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if(this.readyState == 4 && this.status == 200){
                onResponse(this);
            }
        };
        xhttp.open('POST','http://localhost:8000/api/operation', true);
        xhttp.send(content);
    }

    function onResponse(response){
        var content = response.response.split(' ');
        display = '<ul>';
        content.forEach(digit => {
            if(+digit !== 0){
                display = display + '<li>' + digit + '</li>';
            }
        });
        displat = display + '</ul>';
        document.getElementById('content-response').innerHTML = display;
    }
</script>
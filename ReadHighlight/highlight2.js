//Adds span tags to text

$('.text')
    .find('*')
    .addBack('.text')
    .each(function () {
        
        textNode = $(this).contents().filter(function () {
           return this.nodeType === 3; //Node.TEXT_NODE
        });
       
        text = textNode.text().split(' ');
        replace = '';
            
        $.each(text, function (index, value) {
            if ( value.replace(/\s+/, "") ) {   // Remove whitespaces
               replace += '<span class="wrapped"> ' + value + ' </span>';          
            }
        });
        
        textNode.replaceWith( $(replace) );

    });

//Highlight if selected, unhighlight if re-selected

$('.text span').click(function(){
    $(this).toggleClass('selected');
});

$('a').click(function(e){
    e.preventDefault();
    var sentences = $('.text .selected').map(function(i,t){
        return $(t).text();
    }).get().join(', ');
    alert(sentences);
});




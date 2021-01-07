let my_app = {}
my_app.show_gritter = function(title,text)
{
    return $.gritter.add({
        title: title,
        text: text,
        sticky: false,
        image: '../assets/img/user/user-12.jpg',
        before_open: function() {
            if($('.gritter-item-wrapper').length === 3) {
                return false;
            }
        }
    });
}
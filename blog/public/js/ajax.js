window.onload = function() {
        $("#load").on('click', function () {
            var name = $('#search').val();
            $('#res').html('Loading...');
            $.getJSON("/laravel/blog/public/admin/products/search?name="+name, function (data) {
                var items = [];
                $('#res').html('');
                $.each(data, function (key, val) {
                    items.push("<li id='" + key + "'>" + val.name + "</li>");
                });

                $('#res').append(items.join(""));

            });
        });
    }

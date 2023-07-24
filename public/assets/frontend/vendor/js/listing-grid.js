
        $(document).ready(function() {
            $('#filter').click(function(event) {
                event.preventDefault();
                $('#filterNav').addClass('left__filter__show');
                $('#shadow').removeClass('d-none');
                $('#shadow').addClass('layer');
            });

            $('#shadow').click(function(event) {
                event.preventDefault();
                $('#filterNav').removeClass('left__filter__show');
                $('#shadow').removeClass('layer');
                $('#shadow').addClass('d-none');
            });

            $('#list').click(function(event) {
                event.preventDefault();
                $('#products .card-1').addClass('col-lg-12');
                $('#products .card-1').removeClass('col-lg-3');
                $('#products .card-1').removeClass('col-md-4 col-6');
                $('#products .thumb-1').addClass('col-3');
                $('#products .content').addClass('col-9');
                $('#products .product__content').addClass('px-3');
                $('#products .single__product').addClass('text-start');
                $('#products .list').addClass('d-none');
                $('#products .sort__desc').addClass('d-block');
                $('#products .sort__desc').removeClass('d-none');
                $('#products .thumb').removeClass('item-zoom');
                $('#products .price').addClass('d-none');
                $('#products .utility__price').removeClass('d-none');
                $('#grid').removeClass('text-primary');
                $('#list').addClass('text-primary');
            });

            $('#grid').click(function(event) {
                event.preventDefault();
                $('#products .card-1').removeClass('col-lg-12');
                $('#products .card-1').addClass('col-lg-3');
                $('#products .card-1').addClass('col-md-4 col-6');
                $('#products .thumb-1').removeClass('col-3');
                $('#products .content').removeClass('col-9');
                $('#products .single__product').removeClass('text-start');
                $('#products .list').removeClass('d-none');
                $('#products .sort__desc').addClass('d-none');
                $('#products .thumb').addClass('item-zoom');
                $('#products .price').removeClass('d-none');
                $('#products .utility__price').addClass('d-none');
                $('#list').removeClass('text-primary');
                $('#grid').addClass('text-primary');
            });

            $('#nextStep').click(function(event) {
                event.preventDefault();
                $('#collapseOne').removeClass('show');
                $('#collapseThree').addClass('show');
            });
        });
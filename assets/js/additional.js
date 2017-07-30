//option menu for pay band and grade pay
$('#payband').on('change', function() {
    var val = $(this).val();
    $('#5200-20200').hide();
    $('#9300-34800').hide();
    $('#15600-37900').hide();
    $('#37400-67000').hide();
    $('#' + val).show();
});

//autofill the field function
$('#5200-20200').change(function() {
    selectedOption = $('option:selected', this);
    $('input[name=hra]').val( selectedOption.data('hra') );
    $('input[name=cca]').val( selectedOption.data('cca') );
    $('input[name=gis]').val( selectedOption.data('gis') );
});
//autofill the field function
$('#9300-34800').change(function() {
    selectedOption = $('option:selected', this);
    $('input[name=hra]').val( selectedOption.data('hra') );
    $('input[name=cca]').val( selectedOption.data('cca') );
    $('input[name=gis]').val( selectedOption.data('gis') );
});
//autofill the field function
$('#15600-37900').change(function() {
    selectedOption = $('option:selected', this);
    $('input[name=hra]').val( selectedOption.data('hra') );
    $('input[name=cca]').val( selectedOption.data('cca') );
    $('input[name=gis]').val( selectedOption.data('gis') );
});
//autofill the field function
$('#37400-67000').change(function() {
    selectedOption = $('option:selected', this);
    $('input[name=hra]').val( selectedOption.data('hra') );
    $('input[name=cca]').val( selectedOption.data('cca') );
    $('input[name=gis]').val( selectedOption.data('gis') );
});

//option menu for old pay band and old grade pay
$('#old_payband').on('change', function() {
    var val = $(this).val();
    $('#old_5200-20200').hide();
    $('#old_9300-34800').hide();
    $('#old_15600-37900').hide();
    $('#old_15900-38600').hide();
    $('#' + val).show();
});

//autofill the field function
$('#old_5200-20200').change(function() {
    selectedOption = $('option:selected', this);
    $('input[name=old_hra]').val( selectedOption.data('old_hra') );
    $('input[name=old_cca]').val( selectedOption.data('old_cca') );
    $('input[name=old_gis]').val( selectedOption.data('old_gis') );
});
//autofill the field function
$('#old_9300-34800').change(function() {
    selectedOption = $('option:selected', this);
    $('input[name=old_hra]').val( selectedOption.data('old_hra') );
    $('input[name=old_cca]').val( selectedOption.data('old_cca') );
    $('input[name=old_gis]').val( selectedOption.data('old_gis') );
});
//autofill the field function
$('#old_15600-37900').change(function() {
    selectedOption = $('option:selected', this);
    $('input[name=old_hra]').val( selectedOption.data('old_hra') );
    $('input[name=old_cca]').val( selectedOption.data('old_cca') );
    $('input[name=old_gis]').val( selectedOption.data('old_gis') );
});
//autofill the field function
$('#old_37400-67000').change(function() {
    selectedOption = $('option:selected', this);
    $('input[name=old_hra]').val( selectedOption.data('old_hra') );
    $('input[name=old_cca]').val( selectedOption.data('old_cca') );
    $('input[name=old_gis]').val( selectedOption.data('old_gis') );
});

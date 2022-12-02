$(document).ready(function () {
    var currentTime = new Date();
    var current_year = currentTime.getFullYear();
    var previous_year = current_year - 1;
    /*
     * Add multiple properties
     */
    var property =
        '<div id="reform"><div class="row justify-content-center" ><div class="col-lg-4 col-md-4"><div class="single-input"><input type="text" name="PropertyDetail[]" id="user-phone"placeholder="Property Details" required></div></div><div class="col-lg-3 col-md-3"><div class="single-input"><input type="number" name="P_TaxYear2021[]" id="user-phone"placeholder="Purchase Price ' + previous_year + '" required></div></div><div class="col-lg-3 col-md-3"><div class="single-input"><input type="number" name="P_TaxYear2022[]" id="user-phone"placeholder="Purchase Price ' + current_year + '" required></div></div><div class="col-lg-1"><div class="single-input button" style="margin-top: 45px;"><button type="button" id="remove-property"class="btn btn-danger"><span>Remove</span></button></div></div></div>';
    var min_property = 1;
    var max_property = 5;
    $("#add-property").click(function () {
        if (min_property <= max_property) {
            $("#properties").append(property);
            min_property++;
        }
    });
    $("#properties").on('click', '#remove-property', function () {
        $(this).closest('#reform').remove();
        min_property--;
    });

    /*
     * Add multiple banks
     */
    var bank =
        '<div id="reform"><div class="row justify-content-center"><div class="col-lg-4 col-md-4" ><div class="single-input"><input type="text" name="BankAccount[]" id="user-phone"placeholder="Bank Details" required></div></div><div class="col-lg-3 col-md-3"><div class="single-input"><input type="number" name="B_TaxYear2021[]" id="user-phone"placeholder="Tax Year ' + previous_year + '" required></div></div><div class="col-lg-3 col-md-3"><div class="single-input"><input type="number" name="B_TaxYear2022[]" id="user-phone"placeholder="Tax Year ' + current_year + '" required></div></div>                                <div class="col-lg-1"><div class="single-input button" style="margin-top: 45px;"><button type="button" id="remove-bank"class="btn btn-danger"><span>Remove </span></button></div></div></div ></div > ';
    var min_bank = 1;
    var max_bank = 5;
    $("#add-bank").click(function () {
        if (min_bank <= max_bank) {
            $("#banks").append(bank);
            min_bank++;
        }
    });
    $("#banks").on('click', '#remove-bank', function () {
        $(this).closest('#reform').remove();
        min_bank--;
    });

    /*
     * Add multiple vehciles
     */
    var vehcile =
        '<div id="reform"><div class="row justify-content-center" ><div class="col-lg-4 col-md-4"><div class="single-input"><input type="text" name="Vehciles[]" id="user-phone" placeholder="Reg#"required></div></div><div class="col-lg-3 col-md-3"><div class="single-input"><input type="number" name="V_TaxYear2021[]" id="user-phone"placeholder="Tax Year ' + previous_year + '" required></div></div><div class="col-lg-3 col-md-3"><div class="single-input"><input type="number" name="V_TaxYear2022[]" id="user-phone"placeholder="Tax Year ' + current_year + '" required></div></div><div class="col-lg-1"><div class="single-input button" style="margin-top: 45px;"><button type="button" id="remove-vehcile"class="btn btn-danger"><span>Remove </span></button></div></div></div></div>';
    var min_vehcile = 1;
    var max_vehcile = 5;
    $("#add-vehcile").click(function () {
        if (min_vehcile <= max_vehcile) {
            $("#vehciles").append(vehcile);
            min_vehcile++;
        }
    });
    $("#vehciles").on('click', '#remove-vehcile', function () {
        $(this).closest('#reform').remove();
        min_vehcile--;
    });

    /*
     * Add multiple Other Assets
     */
    var asset =
        '<div id="reform"><div class="row justify-content-center"><div class="col-lg-4 col-md-4" ><div class="single-input"><input type="text" name="OtherAssets[]" id="user-phone"placeholder="Other Assets" required></div></div><div class="col-lg-3 col-md-3"><div class="single-input"><input type="number" name="O_TaxYear2021[]" id="user-phone"placeholder="Tax Year ' + previous_year + '" required></div></div><div class="col-lg-3 col-md-3"><div class="single-input"><input type="number" name="O_TaxYear2022[]" id="user-phone"placeholder="Tax Year ' + current_year + '" required></div></div><div class="col-lg-1"><div class="single-input button" style="margin-top: 45px;"><button type="button" id="remove-assets"class="btn btn-danger"><span>Remove </span></button></div></div></div></div> ';
    var min_asset = 1;
    var max_asset = 5;
    $("#add-assets").click(function () {
        if (min_asset <= max_asset) {
            $("#other-assets").append(asset);
            min_asset++;
        }
    });
    $("#other-assets").on('click', '#remove-assets', function () {
        $(this).closest('#reform').remove();
        min_asset--;
    });

});
//print form on page
function print() {
    let printForm = window.open("https://runtime-terrors.greenriverdev.com/printableFacilityRecords.php", "_blank");

    // Wait for page to load before printing
    $($(printForm).on('load', function() {
            printForm.stop();
            printForm.print();
            printForm.close();
        })
    );
}
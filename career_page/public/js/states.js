$(document).ready(function() {
    $('#state').change(function() {
        var selectedState = $(this).val();
        var $districtDropdown = $('#district_dropdown');

        $.getJSON('/states.json', function(data) {
            var districts = getDistricts(selectedState, data);

            $districtDropdown.empty();

            $districtDropdown.append($('<option value="">District*</option>'));
            districts.forEach(function(district) {
                $districtDropdown.append($('<option value="' + district + '">' + district + '</option>'));
            });
        });
    });
    $('#district_dropdown').change(function() {
        var selectedDistrict = $(this).val();
        var $talukaDropdown = $('#taluka_dropdown');

        $.getJSON('/states.json', function(data) {
            var talukas = getTalukas(selectedDistrict, data);

            $talukaDropdown.empty();

            $talukaDropdown.append($('<option value="">Taluka*</option>'));
            talukas.forEach(function(taluka) {
                $talukaDropdown.append($('<option value="' + taluka + '">' + taluka + '</option>'));
            });
        });
    });
});

function getDistricts(state, data) {
    if (state === 'maharashtra') {
        var districtNames = [];

        for (var i = 0; i < data.length; i++) {
            var districtName = data[i]["District name"];
            if (districtName && !districtNames.includes(districtName)) {
                districtNames.push(districtName);
            }
        }

        return districtNames;
    }
    return [];
}


function getTalukas(district, data) {
        var talukaNames = [];
        for (var i = 0; i < data.length; i++) {
            if(data[i]["District name"] === district){
                var talukaName = data[i]["Tahasil"];
                if (talukaName) {
                    talukaNames.push(talukaName);
                }
            } 
        }
        return talukaNames;
}

$("#country_id").ddslick({
    data: [],
    keepJSONItemsOnTop: false,
    animationTime: 50,
    width: "20em",
    height: 300,
    background: "#eee",
    selectText: "",
    defaultSelectedIndex: 0,
    truncateDescription: true,
    imagePosition: "left", // or 'right'
    showSelectedHTML: true,
    clickOffToClose: true,
    embedCSS: true,
    onSelected: function(selectedData){
        //callback function: do something with selectedData;
        // console.log(selectedData.selectedData.value);
        getOperator(selectedData.selectedData.value);


    }
});
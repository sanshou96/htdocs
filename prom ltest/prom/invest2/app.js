window.onload = function () {
    var startingInvestment = 1000;
    
    var dataPoints1 = [ 
    { x: new Date(2024, 1, 14), y: 996.55 },
    { x: new Date(2024, 1, 15), y: 996.77 },
    { x: new Date(2024, 1, 16), y: 1006.4 },
    { x: new Date(2024, 1, 17), y: 976.157 },
    { x: new Date(2024, 1, 18), y: 1007.29 },
    { x: new Date(2024, 1, 19), y: 1015.9 },
    { x: new Date(2024, 1, 20), y: 1037.9 },
    { x: new Date(2024, 1, 21), y: 998 },
    { x: new Date(2024, 1, 22), y: 1024.5 },
    { x: new Date(2024, 1, 23), y: 1029.89 },
    { x: new Date(2024, 1, 27), y: 1077.7 },
    { x: new Date(2024, 1, 28), y: 1086.32 },
    { x: new Date(2024, 1, 29), y: 1123.1 },
    { x: new Date(2024, 2, 1), y: 1120.15 },
    { x: new Date(2024, 2, 2), y: 1120.15 },
    { x: new Date(2024, 2, 3), y: 1136.8 },
    { x: new Date(2024, 2, 4), y: 1158.95 },
    { x: new Date(2024, 2, 5), y: 1256.24 },
    { x: new Date(2024, 2, 7), y: 1264.44 },
    { x: new Date(2024, 2, 8), y: 1285.17 },
    { x: new Date(2024, 2, 9), y: 1297.89 },
    { x: new Date(2024, 2, 11), y: 1312.31 },
    { x: new Date(2024, 2, 12), y: 1339.57 },
    { x: new Date(2024, 2, 13), y: 1345.43 },
    { x: new Date(2024, 2, 14), y: 1361 },
    { x: new Date(2024, 2, 15), y: 1294.64 },
    { x: new Date(2024, 2, 16), y: 1321.86 },
    { x: new Date(2024, 2, 18), y: 1332.17 },
    { x: new Date(2024, 2, 19), y: 1132.4 },
    { x: new Date(2024, 2, 20), y: 1362.4 },
    { x: new Date(2024, 2, 21), y: 1411 },
    { x: new Date(2024, 2, 22), y: 1338.77 },
    { x: new Date(2024, 2, 23), y: 1387.5 },
    { x: new Date(2024, 2, 24), y: 1415.53 },
    { x: new Date(2024, 2, 25), y: 1405.33 },
    { x: new Date(2024, 2, 26), y: 1410.2 },
    { x: new Date(2024, 2, 27), y: 1407.2 },
    { x: new Date(2024, 2, 28), y: 1408.4 },
    { x: new Date(2024, 2, 29), y: 1401.5 },
    { x: new Date(2024, 2, 30), y: 1402.9 },
    { x: new Date(2024, 2, 31), y: 1403.71 }
    ];
    var dataPoints2 = [ 
    { x: new Date(2024, 2, 4), y: 426 },
    { x: new Date(2024, 2, 5), y: 499.7 },
{ x: new Date(2024, 2, 7), y: 505 },
{ x: new Date(2024, 2, 8), y: 517.16 },
{ x: new Date(2024, 2, 9), y: 518.13 },
{ x: new Date(2024, 2, 11), y: 518.13 },
{ x: new Date(2024, 2, 12), y: 529.95 },
{ x: new Date(2024, 2, 13), y: 535.7 },
{ x: new Date(2024, 2, 14), y: 548.22 },
{ x: new Date(2024, 2, 15), y: 506.77 },
{ x: new Date(2024, 2, 16), y: 526.93 },
{ x: new Date(2024, 2, 18), y: 528.68 },
{ x: new Date(2024, 2, 19), y: 419.04 },
{ x: new Date(2024, 2, 20), y: 533.29 },
{ x: new Date(2024, 2, 21), y: 567.28 },
{ x: new Date(2024, 2, 22), y: 538.1 },
{ x: new Date(2024, 2, 23), y: 575.5 },
{ x: new Date(2024, 2, 24), y: 594.27 },
{ x: new Date(2024, 2, 25), y: 593.88 },
{ x: new Date(2024, 2, 26), y: 589.95 },
{ x: new Date(2024, 2, 27), y: 586.1 },
{ x: new Date(2024, 2, 28), y: 582.7 },
{ x: new Date(2024, 2, 29), y: 576.5 },
{ x: new Date(2024, 2, 30), y: 585.1 },
{ x: new Date(2024, 2, 31), y: 586.6 }
    ];
    var dataPoints3 = [
{ x: new Date(2024, 2, 4), y: 664 },
{ x: new Date(2024, 2, 5), y: 796.57 },
{ x: new Date(2024, 2, 7), y: 799.95 },
{ x: new Date(2024, 2, 8), y: 808.28 },
{ x: new Date(2024, 2, 9), y: 811.37 },
{ x: new Date(2024, 2, 11), y: 818 },
{ x: new Date(2024, 2, 12), y: 839 },
{ x: new Date(2024, 2, 13), y: 835.92 },
{ x: new Date(2024, 2, 14), y: 837.33 },
{ x: new Date(2024, 2, 15), y: 790.58 },
{ x: new Date(2024, 2, 16), y: 820 },
{ x: new Date(2024, 2, 18), y: 798.43 },
{ x: new Date(2024, 2, 19), y: 697.77 },
{ x: new Date(2024, 2, 20), y: 821.23 },
{ x: new Date(2024, 2, 21), y: 834.43 },
{ x: new Date(2024, 2, 22), y: 801.37 },
{ x: new Date(2024, 2, 23), y: 829.7 },
{ x: new Date(2024, 2, 24), y: 830.5 },
{ x: new Date(2024, 2, 25), y: 840.1 },
{ x: new Date(2024, 2, 26), y: 840.37 },
{ x: new Date(2024, 2, 27), y: 842.17 },
{ x: new Date(2024, 2, 28), y: 846.7 },
{ x: new Date(2024, 2, 29), y: 839.2 },
{ x: new Date(2024, 2, 30), y: 838.2 },
{ x: new Date(2024, 2, 31), y: 845.27 }
];
var dataPointst = [
{ x: new Date(2024, 1, 14), y: 1987.11 },
{ x: new Date(2024, 1, 15), y: 1988.44 },
{ x: new Date(2024, 1, 16), y: 2007.98 },
{ x: new Date(2024, 1, 17), y: 1940.157 },
{ x: new Date(2024, 1, 18), y: 2064.89 },
{ x: new Date(2024, 1, 19), y: 2078.33 },
{ x: new Date(2024, 1, 20), y: 2112.4 },
{ x: new Date(2024, 1, 21), y: 2059.48 },
{ x: new Date(2024, 1, 22), y: 2072.19 },
{ x: new Date(2024, 1, 23), y: 2074.785 },
{ x: new Date(2024, 1, 27), y: 2215.21 },
{ x: new Date(2024, 1, 28), y: 2200.32 },
{ x: new Date(2024, 1, 29), y: 2236.5 },
{ x: new Date(2024, 2, 1), y: 2253.95 },
{ x: new Date(2024, 2, 2), y: 2105.45 },
{ x: new Date(2024, 2, 3), y: 2223.45 },
{ x: new Date(2024, 2, 4), y: 2289.65 },
{ x: new Date(2024, 2, 5), y: 2552.51 },
{ x: new Date(2024, 2, 7), y: 2569.39 },
{ x: new Date(2024, 2, 8), y: 2610.61 },
{ x: new Date(2024, 2, 9), y: 2627.39 },
{ x: new Date(2024, 2, 11), y: 2648.44 },
{ x: new Date(2024, 2, 12), y: 2708.52 },
{ x: new Date(2024, 2, 13), y: 2717.05 },
{ x: new Date(2024, 2, 14), y: 2746.55 },
{ x: new Date(2024, 2, 15), y: 2591.99 },
{ x: new Date(2024, 2, 16), y: 2668.79 },
{ x: new Date(2024, 2, 18), y: 2659.28 },
{ x: new Date(2024, 2, 19), y: 2249.21 },
{ x: new Date(2024, 2, 20), y: 2716.92 },
{ x: new Date(2024, 2, 21), y: 2812.71 },
{ x: new Date(2024, 2, 22), y: 2678.24 },
{ x: new Date(2024, 2, 23), y: 2792.7 },
{ x: new Date(2024, 2, 24), y: 2840.3 },
{ x: new Date(2024, 2, 25), y: 2839.31 },
{ x: new Date(2024, 2, 26), y: 2922.75 },
{ x: new Date(2024, 2, 27), y: 2917.7 },
{ x: new Date(2024, 2, 28), y: 2920.03 },
{ x: new Date(2024, 2, 29), y: 2899.43 },
{ x: new Date(2024, 2, 30), y: 2908.43 },
{ x: new Date(2024, 2, 31), y: 2917.81 }
];
var dataPoints4 = [
    { x: new Date(2024, 2, 13), y: 0 },
    { x: new Date(2024, 2, 14), y: -0.750606131 },
    { x: new Date(2024, 2, 15), y: -4.206383473 },
    { x: new Date(2024, 2, 16), y: -1.856587731 },
    { x: new Date(2024, 2, 18), y: -5.031718091 },
    { x: new Date(2024, 2, 19), y: -4.644790594 },
    { x: new Date(2024, 2, 20), y: -4.74110731 },
    { x: new Date(2024, 2, 21), y: 1.796804942 },
    { x: new Date(2024, 2, 22), y: 1.433126308 },
    { x: new Date(2024, 2, 23), y: 2.97253313 },
    { x: new Date(2024, 2, 24), y: 3.201700488 },
    { x: new Date(2024, 2, 25), y: 3.94732472 },
    { x: new Date(2024, 2, 26), y: 2.680261716 },
    { x: new Date(2024, 2, 27), y: 1.766913547 },
    { x: new Date(2024, 2, 28), y: -0.199275964 },
    { x: new Date(2024, 2, 29), y: 2.268424724 },
    { x: new Date(2024, 2, 30), y: 3.324587333 },
    { x: new Date(2024, 2, 31), y: 3.628483178 },
    { x: new Date(2024, 3, 1), y: 2.947623634 },
    { x: new Date(2024, 3, 3), y: 1.662293666 },
    { x: new Date(2024, 3, 4), y: 2.683582982 },
    { x: new Date(2024, 3, 5), y: 3.080474277 },
    { x: new Date(2024, 3, 6), y: 2.776578432 },
    { x: new Date(2024, 3, 7), y: 3.467401774 }
];
var dataPoints5 = [
    { x: new Date(2024, 2, 13), y: 0 },
    { x: new Date(2024, 2, 14), y: -1.428571429 },
    { x: new Date(2024, 2, 15), y: -5.792857143 },
    { x: new Date(2024, 2, 16), y: -2.95 },
    { x: new Date(2024, 2, 18), y: -4.578571429 },
    { x: new Date(2024, 2, 19), y: -5.642857143 },
    { x: new Date(2024, 2, 20), y: -6.3 },
    { x: new Date(2024, 2, 21), y: 3.092857143 },
    { x: new Date(2024, 2, 22), y: 2.092857143 },
    { x: new Date(2024, 2, 23), y: 3.664285714 },
    { x: new Date(2024, 2, 24), y: 3.685714286 },
    { x: new Date(2024, 2, 25), y: 5.396428571 },
    { x: new Date(2024, 2, 26), y: 4.771428571 },
    { x: new Date(2024, 2, 27), y: 3.732142857 },
    { x: new Date(2024, 2, 28), y: 1.682142857 },
    { x: new Date(2024, 2, 29), y: 3.303571429 },
    { x: new Date(2024, 2, 30), y: 4.775 },
    { x: new Date(2024, 2, 31), y: 5.460714286 },
    { x: new Date(2024, 3, 1), y: 5.271428571 },
    { x: new Date(2024, 3, 3), y: 3.778571429 },
    { x: new Date(2024, 3, 4), y: 4.396428571 },
    { x: new Date(2024, 3, 5), y: 5.492857143 },
    { x: new Date(2024, 3, 6), y: 5.467857143 },
    { x: new Date(2024, 3, 7), y: 6.178571429 }
];
var dataPoints6 = [
    { x: new Date(2024, 2, 13), y: 0 },
    { x: new Date(2024, 2, 14), y: -0.755 },
    { x: new Date(2024, 2, 15), y: -1.27 },
    { x: new Date(2024, 2, 16), y: -1.24 },
    { x: new Date(2024, 2, 18), y: -1.055 },
    { x: new Date(2024, 2, 19), y: -0.495 },
    { x: new Date(2024, 2, 20), y: -1.51 },
    { x: new Date(2024, 2, 21), y: 2.87 },
    { x: new Date(2024, 2, 22), y: 1.7 },
    { x: new Date(2024, 2, 23), y: 2.97 },
    { x: new Date(2024, 2, 24), y: 2.96 },
    { x: new Date(2024, 2, 25), y: 4.945 },
    { x: new Date(2024, 2, 26), y: 5 },
    { x: new Date(2024, 2, 27), y: 4.715 },
    { x: new Date(2024, 2, 28), y: 5.14 },
    { x: new Date(2024, 2, 29), y: 4.985 },
    { x: new Date(2024, 2, 30), y: 4.785 },
    { x: new Date(2024, 2, 31), y: 5.405 },
    { x: new Date(2024, 3, 1), y: 1.19 },
    { x: new Date(2024, 3, 3), y: -3.34 },
    { x: new Date(2024, 3, 4), y: -3.43 },
    { x: new Date(2024, 3, 5), y: -0.355 },
    { x: new Date(2024, 3, 6), y: -0.355 },
    { x: new Date(2024, 3, 7), y: -2.665 }
];
$.getJSON("generalm2.json", function(data) { 
    var i =0 ;
    $.each(data, function(index, value) {
        console.log(data.length)
        
        var wd = 100;
        console.log(i)
        // Ass          uming each value in data is an array [timestamp, numerical value]
        dataPoints1.push({ x: new Date(value[0]), y: value[1]+wd });
        console.log(dataPoints1)
        var test =function tet(){
            function calculateROI(dataPoints, initialInvestment) {
                var roiData = [];
                // Initialize an object to store the total and count of investments for each month
                var monthlyROI = {};
               // Initialize an array to store the ROI data for each month
                       
                                  var firstAndLastDays = findFirstAndLastDay(dataPoints);
                                 
                                 
        
                // Iterate over each data point
                dataPoints.forEach(function(data) {
                    
                    // Extract the month and year from the data point's date
                    var monthYear = data.x.getMonth() + 1 + '/' + data.x.getFullYear();
                    
                   
                    // If the month is not yet recorded in the monthlyROI object, initialize it
                    if (!monthlyROI[monthYear]) {
                        // Initialize the month's entry with the total investment, count, and starting balance
                        monthlyROI[monthYear] = { total: 0, count: 0, startingBalance: initialInvestment };
                    }
                    // Add the current investment to the total for the month
                    monthlyROI[monthYear].total += data.y;
                    // Increment the count of investments for the month
                    monthlyROI[monthYear].count++;
                    // Update the ending balance for the month
                    monthlyROI[monthYear].endingBalance = data.y;
                  
                });
        
                // Iterate over each month in the monthlyROI object
                for (var monthYear in monthlyROI) {
                    
                    // Retrieve the starting balance for the month
                    var startingBalance = monthlyROI[monthYear].startingBalance;
                    // Retrieve the ending balance for the month
                    var endingBalance = monthlyROI[monthYear].endingBalance;
                    // Retrieve the first and last day for the month                            
                    var monthData = firstAndLastDays[monthYear];
                    if (monthData) {
                        var firstDay = monthData.firstDay.y;
                        var lastDay = monthData.lastDay.y;
                        // Calculate the average ROI for the month
                        var averageROI = ((lastDay - firstDay) / firstDay) * 100;
                        // Push an object containing the month and its corresponding ROI to the roiData array
                        roiData.push({ month: monthYear, roi: averageROI });
                        
                    } else {
                        console.log("Data not available for", monthYear);
                    }
                }
                  
                
                
                // Return the array containing ROI data for each month
                return roiData;
            
            }
        
            function populateTable() {
                var roiDataB2 = calculateROI(dataPoints1, 1000); // Assuming initial investment is 1000
                var roiDataB4 = calculateROI(dataPoints2, 426);
                var roiDataB5 = calculateROI(dataPoints3, 664);
                var totalRoi = calculateROI(dataPointst, 664);
                var roiDatazlr = calculateROI(dataPoints4, 664);
                var roiDatazhr = calculateROI(dataPoints5, 664);
                var roiDatazshr = calculateROI(dataPoints6, 664);
                var tableBody = document.getElementById('roiTableBody');
                // Find common months between all datasets
                var commonMonths = roiDataB2.map(data => data.month);
                commonMonths.forEach(month => {
                    var row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${month}</td>
                        <td>${findROI(roiDataB2, month).toFixed(2)}%</td>
                        <td>${findROI(roiDataB4, month).toFixed(2)}%</td>
                        <td>${findROI(roiDataB5, month).toFixed(2)}%</td>
                        <td>${findROI(roiDatazlr, month).toFixed(2)}%</td>
                        <td>${findROI(roiDatazhr, month).toFixed(2)}%</td>
                        <td>${findROI(roiDatazshr, month).toFixed(2)}%</td>
                        <td>${findROI(totalRoi, month).toFixed(2)}%</td>
                    `;
                    tableBody.appendChild(row);
                });
            }
        
            // Function to find ROI for a specific month
            function findROI(roiData, month) {
                var data = roiData.find(data => data.month === month);
                return data ? data.roi : 0;
            }
        
            // Function to calculate Total ROI for a specific month
            function findTotalROI(roiB2, roiB4, roiB5) {
                
                return (roiB2 + roiB4 + roiB5) / 3;
            }
              function findFirstAndLastDay(dataPoints) {
               
                    // Initialize an object to store pairs of first and last days for each month
                    var firstAndLastDays = {};
                    // Iterate over each data point
                    dataPoints.forEach(function(data) {
                        // Extract the month and year from the data point's date
                        var monthYear = data.x.getMonth() + 1 + '/' + data.x.getFullYear();
                        // Extract the day of the month
                        var day = data.x.getDate();
                        // If the month is not yet recorded in the firstAndLastDays object, initialize it
                        if (!firstAndLastDays[monthYear]) {
                            firstAndLastDays[monthYear] = { firstDay: {day: day, y: data.y}, lastDay: {day: day, y: data.y} };
                        } else {
                            // Update the last day of the month if the current day is greater
                            if (day > firstAndLastDays[monthYear].lastDay.day) {
                                firstAndLastDays[monthYear].lastDay = {day: day, y: data.y};
                            } else if (day < firstAndLastDays[monthYear].firstDay.day) {
                                // Update the first day of the month if the current day is smaller
                                firstAndLastDays[monthYear].firstDay = {day: day, y: data.y};
                            }
                            
                        }
                    });
                    // Return the object containing pairs of first and last days for each month
                    return firstAndLastDays;
                }
            populateTable();
        };
        i++
if(i==data.length){test();};
    }); 
    
});
    
};

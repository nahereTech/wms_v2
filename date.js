// today
var startDate = new Date().format("%Y/%m/%d");
var endDate = new Date().format("%Y/%m/%d");
var filter_date = `${startDate} - ${endDate}`;

// yesterday
 var d = new Date();
 var yester = `${d.getFullYear()}/${d.getMonth() + 1}/${d.getDate() - 1}`;
 var startDate = yester;
 var endDate = yester;
 var filter_date = `${startDate} - ${endDate}`;

 // This_week

 let curr = new Date 
 let week = []
 for (let i = 1; i <= 7; i++) {
 let first = curr.getDate() - curr.getDay() + i 
 let day = new Date(curr.setDate(first)).format("%Y/%m/%d").slice(0, 10)
 week.push(day)
 }
 var startDate = week[0];
 var endDate = week[week.length - 1];
 var filter_date = `${startDate} - ${endDate}`;

// last_week
 let curr = new Date 
 let week = []

 for (let i = 1; i <= 7; i++) {
 var first = curr.getDate() - curr.getDay() + i
 var day = new Date(curr.setDate(first - 7)).format("%Y/%m/%d").slice(0, 10);
 var last = curr.getDate() - curr.getDay() + 7;
 week.push(day)
}
console.log(last) 
var last = week[0].split('/')
var test = (Number(last[last.length - 1]) + 6)
var chk = test.toString().length < 2 ? `0${test}`: `{test}`
last.splice(2, 1, chk)
var startDate = week[0];
var endDate = last.join(',').replace(/[',']/g,'/');
var filter_date = `${startDate} - ${endDate}`;


// This_month

var date = new Date();
var firstDay = new Date(date.getFullYear(), date.getMonth(), 1).format("%Y/%m/%d").slice(0, 10);
var lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0).format("%Y/%m/%d").slice(0, 10);
var startDate = firstDay;
var endDate = lastDay;
var filter_date = `${startDate} - ${endDate}`;
console.log(filter_date)

// This_Year

var startDate = new Date(new Date().getFullYear(), 0,1).format("%Y/%m/%d");
var endDate = new Date(new Date().getFullYear(), 11, 31).format("%Y/%m/%d");
var filter_date = `${startDate} - ${endDate}`;
console.log(filter_date)
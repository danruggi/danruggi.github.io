<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DeskyDoo Calendar Picker</title>

	<!-- Include CSS -->
	<link rel='stylesheet' href='/css/deskyCal.css' onload="this.media='all'"> 

</head>

<body>
	<input type="text" name="calendar" id="calendar_date_selector1" >
	<input type="text" name="calendar" id="calendar_date_selector2" >
	<input type="text" name="calendar" id="calendar_date_selector3" >
	<input type="text" name="calendar" id="calendar_date_selector4" >
	<input type="text" name="calendar" id="calendar_date_selector5" >
	<input type="text" name="calendar" id="calendar_date_selector6" >
	<input type="text" name="calendar" id="calendar_date_selector7" >
	<input type="text" name="calendar" id="calendar_date_selector11" >
	<div style="display:flex; flex-wrap: wrap">
		<input type="text" name="calendar" id="calendar_date_selector8" >
		<input type="text" name="calendar" id="calendar_date_selector9" >
	</div>	
</body>

<!-- Include JS -->
<script type="text/javascript" src="/js/deskyCal.js"></script>

<script type="text/javascript">
	var selectedDate = new Date();
	// console.log("string for calendar: "+inputStr);

	/// Call the init Calendar
	initDeskyCalendar("calendar_date_selector1");	
	initDeskyCalendar("calendar_date_selector3", "double");
	initDeskyCalendar("calendar_date_selector2", "single");	

	//// change date
	selectedDate.setTime(selectedDate.getTime()+(3600*24*1000));	
	initDeskyCalendar("calendar_date_selector4", "double", selectedDate);	

	//// any date
	initDeskyCalendar("calendar_date_selector5", "double", selectedDate.getTime(), true);	

	//// call back
	selectedDate.setTime(selectedDate.getTime()+(40*3600*24*1000));	
	initDeskyCalendar("calendar_date_selector6", "double", selectedDate, null, null, null, call_back_function);
	
	//// disabled dates
	disabledBeforeDate=new Date();
	initDeskyCalendar("calendar_date_selector7", "double", null, null, null, disabledBeforeDate.getTime());	
	initDeskyCalendar("calendar_date_selector11", "double", null, null, null, disabledBeforeDate.getTime()+(3600*24*1000));	
	// initDeskyCalendar("calendar_date_selector10", "double", selectedDate, null, null, disabledBeforeDate.getTime());	
	// initDeskyCalendar("calendar_date_selector8", "double", selectedDate);	

	//// next input
	selectedDate.setTime(selectedDate.getTime()+(40*3600*24*1000));	
	initDeskyCalendar("calendar_date_selector8", "single", selectedDate, null, 'calendar_date_selector9');
	initDeskyCalendar("calendar_date_selector9", "single", selectedDate, null);	

	function call_back_function(d) {
		/// accept the returned date as only argument
		console.log(d);
	}
</script>
</html>
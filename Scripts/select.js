//Function to clear the table except for the title rows.
function clearTable()
{
    var tableRef=document.getElementById("Majors");
    while(tableRef.rows.length > 2){
	tableRef.deleteRow(2);
    }
}

//Function to add the rows with the given information.
//Textnode1==Class number, textnode2==Course name, textnode3==Major
function addRow(textnode1, textnode2, textnode3)
{
    tabBody=document.getElementsByTagName("TBODY").item(0);

    row=document.createElement("TR");

    cell1=document.createElement("TD");
    cell2=document.createElement("TD");
    cell3=document.createElement("TD");

    cell1.appendChild(textnode1);
    cell2.appendChild(textnode2);
    cell3.appendChild(textnode3);
    
    row.appendChild(cell1);
    row.appendChild(cell2);
    row.appendChild(cell3);

    tabBody.appendChild(row);
}    

//Called by dropdown selection, when selection it passes to here, goes through if statements to check which it is and displays the correct one. In the future, this will be done more algorithmatically.
function changeMajor(major)
{
    clearTable();
    var table = document.getElementById("Majors");

    var textnode1;
    var textnode2;
    var textnode3;
    if(major=="default")
    {

    }
    if(major=="BS Computer Science"){
	textnode1=document.createTextNode("CS 1110");
	textnode2=document.createTextNode("Introduction to Programming");
	textnode3=document.createTextNode("Computer Engineering");
	
	addRow(textnode1, textnode2, textnode3);

	textnode1=document.createTextNode("CS 2102");
	textnode2=document.createTextNode("Discrete Mathematics");
	textnode3=document.createTextNode("Computer Engineering");

	addRow(textnode1, textnode2, textnode3);

	textnode1=document.createTextNode("CS 2110");
	textnode2=document.createTextNode("Software Development Methods");
	textnode3=document.createTextNode("Computer Engineering");

	addRow(textnode1, textnode2, textnode3);

	textnode1=document.createTextNode("CS 2150");
	textnode2=document.createTextNode("Program and Data Representation");
	textnode3=document.createTextNode("Computer Engineering");

	addRow(textnode1, textnode2, textnode3);

	textnode1=document.createTextNode("ECE 2330");
	textnode2=document.createTextNode("Digital Logic Design");
	textnode3=document.createTextNode("Computer Engineering");

	addRow(textnode1, textnode2, textnode3);

	textnode1=document.createTextNode("APMA 3100");
	textnode2=document.createTextNode("Probability");
	textnode3=document.createTextNode("Computer Engineering");

	addRow(textnode1, textnode2, textnode3);

	textnode1=document.createTextNode("CS 3240");
	textnode2=document.createTextNode("Advanced Software Development Techniques");
	textnode3=document.createTextNode("Computer Engineering");

	addRow(textnode1, textnode2, textnode3);

	textnode1=document.createTextNode("ECE 3330");
	textnode2=document.createTextNode("Computer Architecture");
	textnode3=document.createTextNode("Computer Engineering");

	addRow(textnode1, textnode2, textnode3);

	textnode1=document.createTextNode("CS 4414");
	textnode2=document.createTextNode("Operating Systems");
	textnode3=document.createTextNode("Computer Engineering");

	addRow(textnode1, textnode2, textnode3);

	textnode1=document.createTextNode("ECE 2330");
	textnode2=document.createTextNode("Digital Logic Design");
	textnode3=document.createTextNode("Electrical Engineering");

	addRow(textnode1, textnode2, textnode3);

	textnode1=document.createTextNode("APMA 3100");
	textnode2=document.createTextNode("Probability");
	textnode3=document.createTextNode("Electrical Engineering");

	addRow(textnode1, textnode2, textnode3);

	textnode1=document.createTextNode("ECE 3330");
	textnode2=document.createTextNode("Computer Architecture");
	textnode3=document.createTextNode("Electrical Engineering");

	addRow(textnode1, textnode2, textnode3);

    }
    if(major=="BS Computer Engineering"){

	textnode1=document.createTextNode("CS 1110");
	textnode2=document.createTextNode("Introduction to Programming");
	textnode3=document.createTextNode("Computer Science");
	
	addRow(textnode1, textnode2, textnode3);

	textnode1=document.createTextNode("CS 2102");
	textnode2=document.createTextNode("Discrete Mathematics");
	textnode3=document.createTextNode("Computer Science");

	addRow(textnode1, textnode2, textnode3);

	textnode1=document.createTextNode("CS 2110");
	textnode2=document.createTextNode("Software Development Methods");
	textnode3=document.createTextNode("Computer Science");

	addRow(textnode1, textnode2, textnode3);

	textnode1=document.createTextNode("CS 2150");
	textnode2=document.createTextNode("Program and Data Representation");
	textnode3=document.createTextNode("Computer Science");

	addRow(textnode1, textnode2, textnode3);

	textnode1=document.createTextNode("ECE 2330");
	textnode2=document.createTextNode("Digital Logic Design");
	textnode3=document.createTextNode("Computer Science");

	addRow(textnode1, textnode2, textnode3);

	textnode1=document.createTextNode("APMA 3100");
	textnode2=document.createTextNode("Probability");
	textnode3=document.createTextNode("Computer Science");

	addRow(textnode1, textnode2, textnode3);

	textnode1=document.createTextNode("CS 3240");
	textnode2=document.createTextNode("Advanced Software Development Techniques");
	textnode3=document.createTextNode("Computer Science");

	addRow(textnode1, textnode2, textnode3);

	textnode1=document.createTextNode("ECE 3330");
	textnode2=document.createTextNode("Computer Architecture");
	textnode3=document.createTextNode("Computer Sciencee");

	addRow(textnode1, textnode2, textnode3);

	textnode1=document.createTextNode("CS 4414");
	textnode2=document.createTextNode("Operating Systems");
	textnode3=document.createTextNode("Computer Science");

	addRow(textnode1, textnode2, textnode3);

	textnode1=document.createTextNode("ECE 2330");
	textnode2=document.createTextNode("Digital Logic Design");
	textnode3=document.createTextNode("Electrical Engineering");

	addRow(textnode1, textnode2, textnode3);

	textnode1=document.createTextNode("ECE 2630");
	textnode2=document.createTextNode("Introduction to Circuit Analysis");
	textnode3=document.createTextNode("Electrical Engineering");

	addRow(textnode1, textnode2, textnode3);

	textnode1=document.createTextNode("APMA 3100");
	textnode2=document.createTextNode("Probability");
	textnode3=document.createTextNode("Electrical Engineering");

	addRow(textnode1, textnode2, textnode3);

	textnode1=document.createTextNode("ECE 3330");
	textnode2=document.createTextNode("Computer Architecture");
	textnode3=document.createTextNode("Electrical Engineering");

	addRow(textnode1, textnode2, textnode3);

	textnode1=document.createTextNode("ECE 3750");
	textnode2=document.createTextNode("Signals and Systems 1");
	textnode3=document.createTextNode("Electrical Engineering");

	addRow(textnode1, textnode2, textnode3);

    }
    if(major=="BS Electrical Engineering"){
	textnode1=document.createTextNode("ECE 2330");
	textnode2=document.createTextNode("Digital Logic Design");
	textnode3=document.createTextNode("Computer Engineering");

	addRow(textnode1, textnode2, textnode3);

	textnode1=document.createTextNode("ECE 2630");
	textnode2=document.createTextNode("Introduction to Circuit Analysis");
	textnode3=document.createTextNode("Computer Engineering");

	addRow(textnode1, textnode2, textnode3);

	textnode1=document.createTextNode("APMA 3100");
	textnode2=document.createTextNode("Probability");
	textnode3=document.createTextNode("Computer Engineering");

	addRow(textnode1, textnode2, textnode3);

	textnode1=document.createTextNode("ECE 3330");
	textnode2=document.createTextNode("Computer Architecture");
	textnode3=document.createTextNode("Computer Engineering");

	addRow(textnode1, textnode2, textnode3);

	textnode1=document.createTextNode("ECE 3750");
	textnode2=document.createTextNode("Signals and Systems 1");
	textnode3=document.createTextNode("Computer Engineering");

	addRow(textnode1, textnode2, textnode3);

	textnode1=document.createTextNode("ECE 2330");
	textnode2=document.createTextNode("Digital Logic Design");
	textnode3=document.createTextNode("Computer Science");

	addRow(textnode1, textnode2, textnode3);

	textnode1=document.createTextNode("APMA 3100");
	textnode2=document.createTextNode("Probability");
	textnode3=document.createTextNode("Computer Science");

	addRow(textnode1, textnode2, textnode3);

	textnode1=document.createTextNode("ECE 3330");
	textnode2=document.createTextNode("Computer Architecture");
	textnode3=document.createTextNode("Computer Science");

	addRow(textnode1, textnode2, textnode3);
    }

}

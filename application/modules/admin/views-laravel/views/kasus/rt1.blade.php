@extends('adminlte::page')

	@section('title', 'Kejaksaan')

	@section('css')
	<link rel="stylesheet" href="vendor/adminlte/plugins/jqwidgets/styles/jqx.base.css" type="text/css" />

	@endsection

		@section('content_header')
			<div>
				<h3><a href='home' ><img class="push-left" src="dist/img/logo-kejaksaan.png" width="75"></a>
				  Direktorat Penyidikan
				  <small> Tindak Pidana Khusus</small>
				</h3>
			</div>
			<ol class="breadcrumb">
				  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				  <li class="active">TAHANAN [rt1]</li>
			</ol>
		@stop

			@section('content')

			<div class="box box-default">
				<div class="box-header with-border">
					<h3 class="box-title">DAFTAR TAHANAN [rt1]</h3>
				</div>
				<div class="box-body">
					<div class="row">
					<div class="col-md-12">
						<div id='jqxWidget'>
							<div id="jqxgrid"></div>
						</div>
						</div>
					</div>

			</div>
		</div>

		@stop

		@section ('js')
			<script type="text/javascript" src="vendor/adminlte/plugins/scripts/jquery-1.11.1.min.js"></script>
		    <script type="text/javascript" src="vendor/adminlte/plugins/jqwidgets/jqxcore.js"></script>
		    <script type="text/javascript" src="vendor/adminlte/plugins/jqwidgets/jqxdata.js"></script> 
		    <script type="text/javascript" src="vendor/adminlte/plugins/jqwidgets/jqxbuttons.js"></script>
		    <script type="text/javascript" src="vendor/adminlte/plugins/jqwidgets/jqxscrollbar.js"></script>
		    <script type="text/javascript" src="vendor/adminlte/plugins/jqwidgets/jqxmenu.js"></script>
		    <script type="text/javascript" src="vendor/adminlte/plugins/jqwidgets/jqxgrid.js"></script>
		    <script type="text/javascript" src="vendor/adminlte/plugins/jqwidgets/jqxgrid.selection.js"></script>
		    <script type="text/javascript" src="vendor/adminlte/plugins/jqwidgets/jqxtabs.js"></script>
		    <script type="text/javascript" src="vendor/adminlte/plugins/scripts/demos.js"></script>
		    <script type="text/javascript">	
        $(document).ready(function () {
            // prepare the data
            var data = new Array();
            var firstNames = ["Nancy", "Robert", "Janet", "Margaret", "Steven", "Michael", "Robert", "Laura", "Anne"];
            var lastNames = ["Davolio", "Fuller", "Leverling", "Peacock", "Buchanan", "Suyama", "King", "Callahan", "Dodsworth"];
            var titles = ["Motor Pompa Portable", "PT. Perusahaan Pengelolaan Asset", "pembebasan tanah di Kecamatan Kota", "pengelolaan Dana Hibah", "penyalahgunaan Dana Swakelola", "pengadaan copmuter dan ATK Petugas", "pengadaan Buku Pendidikan Agama", "Gratifikasi Kementrian PU", "Sales Representative"];
            var titleofcourtesy = ["Ms.", "Dr.", "Ms.", "Mrs.", "Mr.", "Mr.", "Mr.", "Ms.", "Ms."];
            var birthdate = ["08-Dec-17", "19-Jun-17", "30-Aug-17", "19-Jun-17", "04-Mar-17", "02-Jul-17", "29-Jun-17", "09-Jun-17", "27-Jun-17"];
            var hiredate = ["01-May-92", "14-Aug-92", "01-Apr-92", "03-May-93", "17-Oct-93", "17-Oct-93", "02-Jan-94", "05-Mar-94", "15-Nov-94"];
            var address = ["507 - 20th Ave. E. Apt. 2A", "908 W. Capital Way", "722 Moss Bay Blvd.", "4110 Old Redmond Rd.", "14 Garrett Hill", "Coventry House", "Miner Rd.", "Edgeham Hollow", "Winchester Way", "4726 - 11th Ave. N.E.", "7 Houndstooth Rd."];
            var city = ["Terlapor", "Tersangka", "Tersangka", "Ditahan", "Tersangka", "Terlapor", "Ditahan", "Terlapor", "Ditahan"];
            var postalcode = ["RP-2", "RP-3 Khusus", "RP-3 Khusus", "RP-3 Khusus", "RP-3 Khusus", "RP-3 Khusus", "RP-3 Khusus", "RP-3 Khusus", "RP-3 Khusus"];
            var country = ["USA", "USA", "USA", "USA", "UK", "RP-2", "UK", "RP-3 UMUM", "UK"];
            var homephone = ["PNS", "DPRD", "Swasta", "Walikota", "Walikota", "PNS", "PNS", "DPRD", "Gubernur"];
            var notes = ["Education includes a BA in psychology from Colorado State University in 1970.  She also completed 'The Art of the Cold Call.'  Nancy is a member of Toastmasters International.",
                "Andrew received his BTS commercial in 1974 and a Ph.D. in international marketing from the University of Dallas in 1981.  He is fluent in French and Italian and reads German.  He joined the company as a sales representative, was promoted to sales manager in January 1992 and to vice president of sales in March 1993.  Andrew is a member of the Sales Management Roundtable, the Seattle Chamber of Commerce, and the Pacific Rim Importers Association.",
                "Janet has a BS degree in chemistry from Boston College (1984).  She has also completed a certificate program in food retailing management.  Janet was hired as a sales associate in 1991 and promoted to sales representative in February 1992.",
                "Margaret holds a BA in English literature from Concordia College (1958) and an MA from the American Institute of Culinary Arts (1966).  She was assigned to the London office temporarily from July through November 1992.",
                "Steven Buchanan graduated from St. Andrews University, Scotland, with a BSC degree in 1976.  Upon joining the company as a sales representative in 1992, he spent 6 months in an orientation program at the Seattle office and then returned to his permanent post in London.  He was promoted to sales manager in March 1993.  Mr. Buchanan has completed the courses 'Successful Telemarketing' and 'International Sales Management.'  He is fluent in French.",
                "Michael is a graduate of Sussex University (MA, economics, 1983) and the University of California at Los Angeles (MBA, marketing, 1986).  He has also taken the courses 'Multi-Cultural Selling' and 'Time Management for the Sales Professional.'  He is fluent in Japanese and can read and write French, Portuguese, and Spanish.",
                "Robert King served in the Peace Corps and traveled extensively before completing his degree in English at the University of Michigan in 1992, the year he joined the company.  After completing a course entitled 'Selling in Europe,' he was transferred to the London office in March 1993.",
                "Laura received a BA in psychology from the University of Washington.  She has also completed a course in business French.  She reads and writes French.",
                "Anne has a BA degree in English from St. Lawrence College.  She is fluent in French and German."];
            var k = 0;
            for (var i = 0; i < firstNames.length; i++) {
                var row = {};
                row["firstname"] = firstNames[k];
                row["lastname"] = lastNames[k];
                row["title"] = titles[k];
                row["titleofcourtesy"] = titleofcourtesy[k];
                row["birthdate"] = birthdate[k];
                row["hiredate"] = hiredate[k];
                row["address"] = address[k];
                row["city"] = city[k];
                row["postalcode"] = postalcode[k];
                row["country"] = country[k];
                row["homephone"] = homephone[k];
                row["notes"] = notes[k];
                data[i] = row;
                k++;
            }
            var source =
            {
                localdata: data,
                datatype: "array"
            };
            var initrowdetails = function (index, parentElement, gridElement, datarecord) {
                var tabsdiv = null;
                var information = null;
                var notes = null;
                tabsdiv = $($(parentElement).children()[0]);
                if (tabsdiv != null) {
                    information = tabsdiv.find('.information');
                    notes = tabsdiv.find('.notes');
                    var title = tabsdiv.find('.title');
                    title.text(datarecord.firstname);
                    var container = $('<div style="margin: 5px;"></div>')
                    container.appendTo($(information));
                    var photocolumn = $('<div style="float: left; width: 15%;"></div>');
                    var leftcolumn = $('<div style="float: left; width: 45%;"></div>');
                    var rightcolumn = $('<div style="float: left; width: 40%;"></div>');
                    container.append(photocolumn);
                    container.append(leftcolumn);
                    container.append(rightcolumn);
                    var photo = $("<div class='jqx-rc-all' style='margin: 10px;'><b>Photo:</b></div>");
                    var image = $("<div style='margin-top: 10px;'></div>");
                    var imgurl = 'dist/img/subyek/' + datarecord.firstname.toLowerCase() + '.jpg';
                    var img = $('<img height="60" src="' + imgurl + '"/>');
                    image.append(img);
                    image.appendTo(photo);
                    photocolumn.append(photo);
                    var firstname = "<div style='margin: 10px;'><b>Nama Depan:</b> " + datarecord.firstname + "</div>";
                    var lastname = "<div style='margin: 10px;'><b>Nama Belakang:</b> " + datarecord.lastname + "</div>";
                    var title = "<div style='margin: 10px;'><b>Kasus:</b> " + datarecord.title + "</div>";
                    var address = "<div style='margin: 10px;'><b>Address:</b> " + datarecord.address + "</div>";
                    $(leftcolumn).append(firstname);
                    $(leftcolumn).append(lastname);
                    $(leftcolumn).append(title);
                    $(leftcolumn).append(address);
                    var postalcode = "<div style='margin: 10px;'><b>Postal Code:</b> " + datarecord.postalcode + "</div>";
                    var city = "<div style='margin: 10px;'><b>City:</b> " + datarecord.city + "</div>";
                    var phone = "<div style='margin: 10px;'><b>Phone:</b> " + datarecord.homephone + "</div>";
                    var hiredate = "<div style='margin: 10px;'><b>Hire Date:</b> " + datarecord.hiredate + "</div>";
                    $(rightcolumn).append(postalcode);
                    $(rightcolumn).append(city);
                    $(rightcolumn).append(phone);
                    $(rightcolumn).append(hiredate);
                    var notescontainer = $('<div style="white-space: normal; margin: 5px;"><span>' + datarecord.notes + '</span></div>');
                    $(notes).append(notescontainer);
                    $(tabsdiv).jqxTabs({ width: 750, height: 170});
                }
            }
            var dataAdapter = new $.jqx.dataAdapter(source);
            $("#jqxgrid").jqxGrid(
            {
                width: '100%',
                height: 500,
                source: dataAdapter,
                rowdetails: true,
                rowdetailstemplate: { rowdetails: "<div style='margin: 10px;'><ul style='margin-left: 30px;'><li class='title'></li><li>Notes</li></ul><div class='information'></div><div class='notes'></div></div>", rowdetailsheight: 200 },
                ready: function () {
                    $("#jqxgrid").jqxGrid('showrowdetails', 0);
                    $("#jqxgrid").jqxGrid('showrowdetails', 1);
                },
                initrowdetails: initrowdetails,
 columns: [
                      { text: 'Nama', dataField: 'firstname', width: 200 },
                      { text: 'Nama Belakang', dataField: 'lastname', width: 200 },
                      { text: 'Perkara', dataField: 'title', width: 200 },
                      { text: 'Status', dataField: 'city', width: 100 },
                      { text: 'Batas Waktu', dataField: 'birthdate'}
                  ]
            });
        });
    </script>


		@stop


<main>
   <div id="results">
       <div class="container">
           <div class="row">
               <div class="col-md-6">
                   <h4><strong>Administrator Dashboard</strong></h4>
               </div>
               <div class="col-md-6">
                    <div class="search_bar_list">
                    <input type="text" class="form-control" placeholder="Ex. Specialist, Name, Doctor...">
                    <input type="submit" value="Search">
                </div>
               </div>
           </div>
           <!-- /row -->
       </div>
   </div>
   
   <div class="filters_listing">
		<div class="container">
			<ul class="clearfix">
				<li>
					<h6></h6>
					<div class="switch-field">
						<input type="radio" id="all" name="type_patient" value="all" checked>
						<label for="all">Database Information</label>
					</div>
				</li>
				<li>
					<h6>Layout</h6>
					<div class="layout_view">
						<a href="#0" class="active"><i class="icon-th"></i></a>
						<a href="#0"><i class="icon-th-list"></i></a>
						<a href="#0"><i class="icon-map-1"></i></a>
					</div>
				</li>
				<li>
					<h6>Sort by</h6>
					<select name="orderby" class="selectbox">
					<option disabled value="Closest">Disabled</option>
					</select>
				</li>
			</ul>
		</div>
	</div>
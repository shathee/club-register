    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"> 
					
					
                    </div>
                    <div class="card-body">
                    <h4>Dear {{ucfirst($membership->fullname)}}</h4>
                    <p>
                        We earnestly thank you for being a valued member of SUST Club Ltd. We would also like to acknowledge your deposite of BDT. 
						<?php 	if($membership->membership_type =='life')
								{ echo '75,000/-';}
								else{
								echo '10,000/-';
								}
                        ?>
						,for the 
                        {{ ucfirst($membership->membership_type)}}
                        Membership of SUST Club Ltd. 
                    </p>
					
					<p>First Meeting of Founder Members will be held on 20-04-2018 (Time &amp; Place will be announced later)</p>
					<p>Best Regards</p>
					<p>SUST Club Ltd</p>

                    </div>
						

                    </div>
                </div>
            </div>
        </div>
    </div>


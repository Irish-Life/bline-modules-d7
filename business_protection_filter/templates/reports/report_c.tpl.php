<?php

  // the variables are posted to the PDF page
  // They are not sent over URL (GET)
  $clientName =  $_POST['clientName'];
  $clientAddress =  $_POST['clientAddress'];
  $businessName =  $_POST['businessName'];
  $businessAddress =  $_POST['businessAddress'];
  $brokerName =  $_POST['brokerName'];

  $brokerNeedsObj =  nl2br($_POST['brokerNeedsObj'])  ; //free text box for broker

  $keyPersonAName =  $_POST['keyPersonAName'];
  $keyPersonAShare =  $_POST['keyPersonAShare'];
  $keyPersonAValue =  $_POST['keyPersonAValue'];
  $keyPersonBName =  $_POST['keyPersonBName'];
  $keyPersonBShare =  $_POST['keyPersonBShare'];
  $keyPersonBValue =  $_POST['keyPersonBValue'];
  $keyPersonCName =  $_POST['keyPersonCName'];
  $keyPersonCShare =  $_POST['keyPersonCShare'];
  $keyPersonCValue =  $_POST['keyPersonCValue'];
  $keyPersonDName =  $_POST['keyPersonDName'];
  $keyPersonDShare =  $_POST['keyPersonDShare'];
  $keyPersonDValue =  $_POST['keyPersonDValue'];
  $keyPersonEName =  $_POST['keyPersonEName'];
  $keyPersonEShare =  $_POST['keyPersonEShare'];
  $keyPersonEValue =  $_POST['keyPersonEValue'];

  $BrokerProductDetails =  nl2br($_POST['BrokerProductDetails']); //free text box for broker

  // get the node number of the current page
  $time = date("dmy_his", time());
  $today = date("j F Y"); 





  ///////////////////////
  // COVER
  ?>
  <div class="front-img" style="background:url('<?php echo drupal_get_path('module', 'business_protection_filter');?>/images/keyperson-report-cover.jpg') no-repeat;"><div class="front-author">Prepared for <?php echo $businessName ?></div></div>
  <pagebreak>
  <?
  ///////////////////////
  ///////////////////////
  ///////////////////////
  ///////////////////////
  // Front Letter

  // address & date
  ?>
  <div class="letter-address">
  <?
    echo $clientName.' <br/>';
    echo $clientAddress[0]['line1'].' <br/>';
    echo $clientAddress[0]['line2'].' <br/>';
    echo $clientAddress[0]['line3'].' <br/>';
    echo $clientAddress[0]['line4'].' <br/>';
    echo "<br/>";
    echo $today.' <br/>';
  ?>
  </div>
  <div class="letter-salutation">
  Dear <?php echo $clientName ?>,
  </div>
  <div class="letter-body">
    <p>Thank you for taking the time to meet me and discuss the financial planning requirements for your business. I am now confirming the outcome of our meeting.</p>
    <p>Please find enclosed your Keyperson Insurance report.</p>
    <p>This report is based on the details gathered at our meeting and provides you with details of the option that  might suit your particular business requirements.</p>
    <p>I will be in contact with you shortly to discuss implementing the option that you have chosen.</p>
    <p>In the meantime, if you have any questions, please do not hesitate to contact me.</p>
  </div>
  <div class="letter-signoff">
    Yours sincerely,<br/>
    <?php echo $brokerName ?>
  </div>
    <pagebreak>

  <div class="report">
           <?php
    if(strlen($brokerNeedsObj) >=1){
      ?>
    <p>Following an analysis of the businesses financial circumstances and based on the information you have provided, our understanding of the businesses requirements are as follows:</p>
    <h3>Needs and Objectives</h3>
    <p> <?php echo $brokerNeedsObj ?></p>
    <?php
    }
    ?>

    <p>Keyperson Insurance is life cover and or serious illness cover taken out by a company on the life of a key employee, shareholder or director. The objective is to protect the company against the financial consequences of that individual's sudden death or serious illness.</p>
    <p>It is designed to protect the value of the company's human assets much in the same way as fire insurance protects a company's physical assets.</p>
    <p>Keyperson Insurance protects the future security of the business.</p>

    <h3>Company Borrowings</h3>
    <p>The purpose of this report is to detail the type of arrangement required to protect <?php echo $businessName?> against the loan that would have to be repaid as a consequence of the death <?php echo (($keyPersonAValue > 0) ? ' or serious illness' : '') ?> of <?php echo $keyPersonAName ?>.</p>
    <p>This report is based on the answers provided and the selected route chosen through the Business Protection Pathfinder. It is understood that cover is required by the company for loan cover.</p>

    <h3>Business Details</h3>

    <table>
      <tr>
        <th>Keyperson</th><th>Life Cover</th><th>Serious Illness Cover</th>
      </tr>
      <tr>
        <td><?php echo $keyPersonAName ?></td><td>&euro;<?php echo number_format($keyPersonAShare) ?></td><td>&euro;<?php echo number_format($keyPersonAValue) ?></td>
      </tr>
    </table>

    <h3>Structuring the Arrangement</h3>
    <p>The company takes out a protection plan on the keyperson to provide for the calling in of loans on the keypersons death<?php echo ($keyPersonAValue > 0 ? ' or serious illness' : '') ?>. The plan is arranged as follows:</p>
    <ul>
      <li>Life assured = <?php echo $keyPersonAName ?></li>
      <li>Plan owner = <?php echo $businessName?></li>
      <li>Payer of premium = <?php echo $businessName?></li>
      <li>Sum Assured paid to the company <?php echo $businessName?></li>
    </ul>
    <p>The cover will provide an immediate lump sum payment to the company to cover loans that the business may have to repay. </p>
    <pagebreak>
    <h3>Quantifying the level of cover</h3>
    <p>The level of cover on the contract is estimated as the amount of any outstanding loans personally guaranteed by <?php echo $keyPersonAName ?> or any outstanding loans made by <?php echo $keyPersonAName ?> to the company. The level of cover will also be subject to full medical and financial underwriting.</p>

     <h3>Board Resolution</h3>
    <p><?php echo $businessName?> should pass a Board Resolution recording their intention to affect Keyperson Insurance cover.  The resolution should cover the purpose for which the plan is being taken out. Sample board resolution is available in the Supporting Information section.</p>
    


    <h3>Tax Implications</h3>
    <p>As the purpose of the plan is to protect a company loan this is deemed to be a ‘Capital item’ and the following tax treatment applies.</p>
    <table class="drama">
      <tr>
        <th>Reason for cover</th><th>Sum Assured</th><th>Premium</th>
      </tr>
      <tr>
        <td>Loan Cover</td><td>No - Not Taxable</td><td>Not Tax Deductable</td>
      </tr>
    </table>
    <p><u>Taxation of Plan Benefits – Loan Cover (Capital item)</u></p>
    <h4>Corporation Tax </h4>
    <p><strong>Does not apply.</strong> The proceeds are likely to be treated as a capital receipt for the company and thus <u>NOT</u> subject to Corporation Tax.</p>
    <h4>Capital Gains Tax</h4>
    <p><strong>Does not apply.</strong> The proceeds of a company owned plan, paid out on death or disablement, are <u>EXEMPT</u> from Capital Gains Tax.</p>  
    <h4><u>So no tax liability arises for the company on the payment from the plan.</u></h4>
    <p><br/><u>Taxation of Premium  – Loan Cover (Capital item)</u></p>
    <h4>Tax Deductible</h4>
    <p><strong>No.</strong> The premiums are NOT admissible deductions for Corporation Tax.</p>
    <p><i>The tax treatment of the plan benefits will depend on the purpose for which the plan is taken out, whether to cover a “Capital” or “Revenue” type loss. Where the cover is required for two different purposes i.e. loan cover and loss of profits cover, we would recommend two separate plans should be taken out.</i></p>
    <p><strong>IN ALL CASES THE CLIENT SHOULD SEEK PROFESSIONAL LEGAL AND TAX ADVICE BEFORE PROCEEDING TO ASCERTAIN IF THE ARRANGEMENT IS LIKELY TO BE APPROPRIATE TO THEIR BUSINESS AND CORPORATE CIRCUMSTANCES.	</strong></p>

  <?php
    if(strlen($BrokerProductDetails) >=1){
      ?>
    <pagebreak>
    <h3>Conclusion</h3>
    <p>Having considered the options that meet your need / objectives, I am now outlining how the specific features of the product type are suitable to meet your needs and why the product recommended is most suitable.</p>
    <p><?php echo $BrokerProductDetails; ?></p>

    <?php    
    };
    ?>

    <pagebreak>
    <h3>Supporting Information</h3>
    <strong>Revenue Clarification on Tax Deduction for premiums on Keyman Insurance Policies.</strong>
    <p>The following is an extract from a Circular issued by the Superintending Inspector of Taxes, dated July 1986, with regard to the admissibility of Keyman Insurance premiums as an allowable deduction for Corporation tax purposes.</p>
    <p><i>&quot;..the term 'Keyman' may be applied to a range of policies not all of which may give rise to admissible tax deductions and the allowability or otherwise of premiums paid will be determined by reference to the terms and purposes of the policy, rather than any description which the Insurance Company may give it. In applying the conditions (a), (b), (c), (d) '(see Section 4.2)' the following guidelines are followed:</i></p>
    <p><i>"Employee" is taken as including a Director.</i></p>
    <p><i>A person who directly or indirectly, owns or is able to control more than 15% of the ordinary share capital of a company is regarded as having a substantial proprietary interest in the company.</i></p>
    <p><i>The policy must be for a fixed term with no surrender value and no endowment or other investment content; it must not contain provisions whereby benefits could be paid to any person other than the employer.</i></p>

    <p><i>The insurance must be related to loss of profits only and it will be necessary to satisfy the Inspector of Taxes that the contingency insured against will genuinely have an adverse effect on the employers business.</i></p>
    <p><i>Premiums on policies taken out to cover loans or other outstanding debts which would become repayable on the death of an employee are not admissible deductions...."</i></p>
   

    <h3><i>Sample Board Resolution</i></h3>
    <p><i>"That the company shall effect a life assurance plan on the life of Mr X in the sum of €XXX,XXX. The purpose of this insurance is to protect the company borrowing which may be repayable in the event of his death or serious illness whilst in the service of the Company.<br/><br/>Mr Y is hereby authorised to complete all necessary documentation on behalf of the company and it is hereby declared that the proceeds of this insurance are intended for the protection of the Company itself and are not for the benefit of Mr X or his family."</p>
    <p><strong>IN ALL CASES THE CLIENT SHOULD SEEK PROFESSIONAL LEGAL AND TAX ADVICE BEFORE PROCEEDING TO ASCERTAIN IF THE ARRANGEMENT IS LIKELY TO BE APPROPRIATE TO THEIR BUSINESS AND CORPORATE CIRCUMSTANCES.	</strong></p>
  </div>

  <pagebreak>



<?php
    function strip_classname($classname){
        if ($classname[0]=='*'){$classname= substr($classname,1);} //strip the * off the front of the classnames
        return $classname;
    }

    // FREQUENTLY ASKED QUESTIONS FOR THE COOKING SCHOOL CALENDAR //
    function faq_section() {
        $faq=		"<ul>
                    <li><strong>Cost:</strong>&#36; 150</li>
                    <li><strong>Duration:</strong>&#126; 4 Hours</li>
                    <li class='wide'><strong>Start Times:</strong> Day classes start at 9.30am.<br>Evening classes start at 4.30pm</li>
                    <li class='wide'><strong>How to Book:</strong> Click the <span class='teal'>book now</span> button beside the class/date you like. If you want to speak to someone, call us during office hours on (07) 5446 8977.</li>
                    <li class='wide'><strong>What Do I Bring</strong>Nothing. We provide all aprons, knives, utensils etc. for you to use during the duration of the class. 
                    Because you will be handling knives and hot liquids <span class='teal'>please wear closed-in shoes</span>.</li>
                    <li class='wide'><strong>Dietary Needs?</strong>We have specific gluten free and non-seafood classes however we don't cater for vegetarians. Browse the calendar for the dates. </li>
                    <li class='wide'><strong>Is lunch or dinner included?</strong>Yes, you will dine on the recipes prepared during the class - plus enjoy it all with complementary wine and beer.</li>
                    <li class='wide'><strong>Children?</strong>Children over 12 who are keen cooks are welcome. Sorry, no babies or strollers. </li>
                
                </ul>
                <div class='clear'></div>";
                return $faq;
    }

    function split_classdescription($classdescription) {
        $offset= strpos($classdescription,":");
        $descriptionlength = strlen($classdescription);
        $description = substr($classdescription,0, $offset);// the first part of the description
        $recipes = substr($classdescription,(($descriptionlength-($offset+1))*-1));// gets the recipe part AFTER the colon, hence the +1
        $printrecipes= str_replace("*", "<li class='wide'>", $recipes); // replace asterisk with LI
        
        $result = array($description, $recipes);
        return $result;
	}
?>

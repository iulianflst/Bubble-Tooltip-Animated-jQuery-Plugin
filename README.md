# Bubble Tooltip Animated jQuery Plugin

<h2>Quick Guide</h2>

<h3>Support this plugin on Patreon</h3> 
<a href="https://www.patreon.com/Flesteriulian">https://www.patreon.com/Flesteriulian</a>

<h3>Youtube demo</h3> 

<a href="https://youtu.be/_j_8MbYQYRc">https://youtu.be/_j_8MbYQYRc</a><br />
Include css file, jquery and FlstBubble.js .  You can include de minified version.<br />

<code>   
&#x3C;script src=&#x22;http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js&#x22;&#x3E;&#x3C;/script&#x3E;<br />
&#x3C;script src=&#x22;FlstBubble-min.js&#x22;&#x3E;&#x3C;/script&#x3E;<br />
&#x3C;link rel=&#x22;stylesheet&#x22; href=&#x22;css/blue-theme.css&#x22; type=&#x22;text/css&#x22;&#x3E;<br />
</code> 
 

<h2>Normal Tooltip</h2>

Create one or more  html tags with title tag

<code>  
&#x3C;p class=&#x22;tooltip&#x22;&#x3E;&#x3C;/p&#x3E;
</code> 

<h2>Then init the bubble plugin</h2>

<code>  

$(&#x27;.flstbubble li, .flstbubble2&#x27;).flstBubble();   

 </code> 

<h2>The wizard mode:</h2>

<code> 
&#x3C;div class=&#x22;flstbubble s0&#x22;&#x3E;text&#x3C;/div&#x3E;

&#x3C;div class=&#x22;flstbubble&#x22;&#x3E;text&#x3C;/div&#x3E;

&#x3C;div class=&#x22;flstbubble s1&#x22;&#x3E;text&#x3C;/div&#x3E;

&#x3C;div class=&#x22;flstbubble&#x22;&#x3E;text&#x3C;/div&#x3E;

&#x3C;div class=&#x22;flstbubble s2&#x22;&#x3E;text&#x3C;/div&#x3E;

&#x3C;div class=&#x22;flstbubble s3&#x22;&#x3E;text&#x3C;/div&#x3E;

 $(&#x27;.flstbubble&#x27;).flstBubble({
                          
&nbsp;&nbsp;&nbsp;&nbsp;wizard: new Array(&#x27;.s0&#x27;,&#x27;.s1&#x27;,&#x27;.s3&#x27;),// the divs that will be used in the wizard<br />
&nbsp;&nbsp;&nbsp;&nbsp;showOnlyOnWizard: true ,hide any other class that isn&#x27;t in the wizard<br />
&nbsp;&nbsp;&nbsp;&nbsp;autoscroll:true, // enabled autoscroll<br />
&nbsp;&nbsp;&nbsp;&nbsp;theme: { background:&#x27;red&#x27;,color:&#x27;#fff&#x27; }, //create a custom theme<br />
  });
</code>    

                              
<h2>Properties</h2>

<b>id:String</b> -  if you are using more the a instance of this plugin then add a custom id for each <br />

<b>duration:int</b> - duration can be a string or a string such as slow, fast(it is a jQuery duration attribute)<br />

<b>wizard:Array</b> - you can pass an array of class or ids to use the wizard.<br />

<b>autoscroll:Boolean</b> - enable autoscroll - if the bubble is on the bottom of the page and you are using wizard is very usefull<br />

<b>startWizardFrom:int</b> -  you can set the wizard to start from what nr from array you choose. The count is starting from 0<br />

<b>showOnlyOnWizard:Boolean</b> - disable other bubbles except those from wizard<br />

<b>useWizard:Boolean</b>   - if is set to true then the user will have to click on a bubble to get to the next.<br />

<b>onFinishWizard:Function</b> - When the user reach the end of the bubbles (wizard array) then the onFinishWizard function is called if is defined<br />

<b>theme:plainObject</b> - you can add a plainObject with background and color properties: ex: <code>{background:&#x27;#color&#x27;, color:&#x27;#color&#x27;}</code> .By default the theme is disabled <br />
Installing Wordpress Plugin

<h2>How to install the plugin?</h2>
<ol>
<li>Login into wordpress admin</li>
<li>Go to Plugins</li>
<li>Click the add new button</li>
<li>Click the upload button</li>
<li>Browse for the bubble plugin you purchased</li>
<li>And click install now</li>
<li>click the activate button to activate the plugin</li>
<li>After you activate the plugin in the text editor you will find a button for adding short tags.</li>
</ol>
 

 
<h2>Using Bubble on wordpress </h2>

When you click the bubble button you will be able to set:
<ul>
    <li><b>Priority</b> - set the position of the bubble for the wizard mode</li>
    <li><b>Display Type</b> - choose the tag you want to display the content (block = div, inline= span)</li>
    <li><b>Type</b>- Mouse over- standard mode and wizard bubble(a sequance of bubbles )</li>
    <li><b>Content</b>- the text that will be displayed on the page</li>
    <li><b>Bubble content</b>: the content of the bubble - it will show up only when the user mouse over the content tag</li>
</ul>
In the wizard bubble mode the user will navigate from bubble to bubble(check out the video)
Additional Help

For any questions don&#x27;t hesitate to contact me https://flester.ro/contact

<h3>License</h3>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" /></a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>.

<h3>License For patreons</h3>
Free to use it in any way except selling just this plugin 

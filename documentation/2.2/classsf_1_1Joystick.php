<?php
    $version = '2.2'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::Joystick Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.8 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Class&#160;List</span></a></li>
      <li><a href="classes.php"><span>Class&#160;Index</span></a></li>
      <li><a href="hierarchy.php"><span>Class&#160;Hierarchy</span></a></li>
      <li><a href="functions.php"><span>Class&#160;Members</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Joystick.php">Joystick</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#nested-classes">Classes</a> &#124;
<a href="#pub-types">Public Types</a> &#124;
<a href="#pub-static-methods">Static Public Member Functions</a> &#124;
<a href="classsf_1_1Joystick-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::Joystick Class Reference<div class="ingroups"><a class="el" href="group__window.php">Window module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>Give access to the real-time state of the joysticks.  
 <a href="classsf_1_1Joystick.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="Joystick_8hpp_source.php">Joystick.hpp</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structsf_1_1Joystick_1_1Identification.php">Identification</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">Structure holding a joystick's identification.  <a href="structsf_1_1Joystick_1_1Identification.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-types"></a>
Public Types</h2></td></tr>
<tr class="memitem:a951a7c775921304a5f3443c6e2bb4d65"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom">{ <a class="el" href="classsf_1_1Joystick.php#a951a7c775921304a5f3443c6e2bb4d65a6e0a2a95bc1da277610c04d80f52715e">Count</a> = 8, 
<a class="el" href="classsf_1_1Joystick.php#a951a7c775921304a5f3443c6e2bb4d65a2f1b8a0a59f2c12a4775c0e1e69e1816">ButtonCount</a> = 32, 
<a class="el" href="classsf_1_1Joystick.php#a951a7c775921304a5f3443c6e2bb4d65accf3e487c9f6ee2f384351323626a42c">AxisCount</a> = 8
 }</td></tr>
<tr class="memdesc:a951a7c775921304a5f3443c6e2bb4d65"><td class="mdescLeft">&#160;</td><td class="mdescRight">Constants related to joysticks capabilities.  <a href="classsf_1_1Joystick.php#a951a7c775921304a5f3443c6e2bb4d65">More...</a><br /></td></tr>
<tr class="separator:a951a7c775921304a5f3443c6e2bb4d65"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a48db337092c2e263774f94de6d50baa7"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7">Axis</a> { <br />
&#160;&#160;<a class="el" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a95dc8b9bf7b0a2157fc67891c54c401e">X</a>, 
<a class="el" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a51ef1455f7511ad4a78ba241d66593ce">Y</a>, 
<a class="el" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a7c37a1240b2dafbbfc5c1a0e23911315">Z</a>, 
<a class="el" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7aeebbcdb0828850f4d69e6a084801fab8">R</a>, 
<br />
&#160;&#160;<a class="el" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a0a901f61e75292dd2f642b6e4f33a214">U</a>, 
<a class="el" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7aa2e2c8ffa1837e7911ee0c7d045bf8f4">V</a>, 
<a class="el" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a06420f7714e4dfd8b841885a0b5f3954">PovX</a>, 
<a class="el" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a0f8ffb2dcddf91b98ab910a4f8327ad9">PovY</a>
<br />
 }</td></tr>
<tr class="memdesc:a48db337092c2e263774f94de6d50baa7"><td class="mdescLeft">&#160;</td><td class="mdescRight">Axes supported by SFML joysticks.  <a href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7">More...</a><br /></td></tr>
<tr class="separator:a48db337092c2e263774f94de6d50baa7"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-static-methods"></a>
Static Public Member Functions</h2></td></tr>
<tr class="memitem:ac7d4e1923e9f9420174f26703ea63d6c"><td class="memItemLeft" align="right" valign="top">static bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Joystick.php#ac7d4e1923e9f9420174f26703ea63d6c">isConnected</a> (unsigned int joystick)</td></tr>
<tr class="memdesc:ac7d4e1923e9f9420174f26703ea63d6c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Check if a joystick is connected.  <a href="#ac7d4e1923e9f9420174f26703ea63d6c">More...</a><br /></td></tr>
<tr class="separator:ac7d4e1923e9f9420174f26703ea63d6c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4de9f445c6582bfe9f0873f695682885"><td class="memItemLeft" align="right" valign="top">static unsigned int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Joystick.php#a4de9f445c6582bfe9f0873f695682885">getButtonCount</a> (unsigned int joystick)</td></tr>
<tr class="memdesc:a4de9f445c6582bfe9f0873f695682885"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the number of buttons supported by a joystick.  <a href="#a4de9f445c6582bfe9f0873f695682885">More...</a><br /></td></tr>
<tr class="separator:a4de9f445c6582bfe9f0873f695682885"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a268e8f2a11ae6af4a47c727cb4ab4d95"><td class="memItemLeft" align="right" valign="top">static bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Joystick.php#a268e8f2a11ae6af4a47c727cb4ab4d95">hasAxis</a> (unsigned int joystick, <a class="el" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7">Axis</a> axis)</td></tr>
<tr class="memdesc:a268e8f2a11ae6af4a47c727cb4ab4d95"><td class="mdescLeft">&#160;</td><td class="mdescRight">Check if a joystick supports a given axis.  <a href="#a268e8f2a11ae6af4a47c727cb4ab4d95">More...</a><br /></td></tr>
<tr class="separator:a268e8f2a11ae6af4a47c727cb4ab4d95"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ae0d97a4b84268cbe6a7078e1b2717835"><td class="memItemLeft" align="right" valign="top">static bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Joystick.php#ae0d97a4b84268cbe6a7078e1b2717835">isButtonPressed</a> (unsigned int joystick, unsigned int button)</td></tr>
<tr class="memdesc:ae0d97a4b84268cbe6a7078e1b2717835"><td class="mdescLeft">&#160;</td><td class="mdescRight">Check if a joystick button is pressed.  <a href="#ae0d97a4b84268cbe6a7078e1b2717835">More...</a><br /></td></tr>
<tr class="separator:ae0d97a4b84268cbe6a7078e1b2717835"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aea4930193331df1851b709f3060ba58b"><td class="memItemLeft" align="right" valign="top">static float&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Joystick.php#aea4930193331df1851b709f3060ba58b">getAxisPosition</a> (unsigned int joystick, <a class="el" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7">Axis</a> axis)</td></tr>
<tr class="memdesc:aea4930193331df1851b709f3060ba58b"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the current position of a joystick axis.  <a href="#aea4930193331df1851b709f3060ba58b">More...</a><br /></td></tr>
<tr class="separator:aea4930193331df1851b709f3060ba58b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa917c9435330e6e0368d3893672d1b74"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="structsf_1_1Joystick_1_1Identification.php">Identification</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Joystick.php#aa917c9435330e6e0368d3893672d1b74">getIdentification</a> (unsigned int joystick)</td></tr>
<tr class="memdesc:aa917c9435330e6e0368d3893672d1b74"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the joystick information.  <a href="#aa917c9435330e6e0368d3893672d1b74">More...</a><br /></td></tr>
<tr class="separator:aa917c9435330e6e0368d3893672d1b74"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ab85fa9175b4edd3e5a07ee3cde0b0f48"><td class="memItemLeft" align="right" valign="top">static void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Joystick.php#ab85fa9175b4edd3e5a07ee3cde0b0f48">update</a> ()</td></tr>
<tr class="memdesc:ab85fa9175b4edd3e5a07ee3cde0b0f48"><td class="mdescLeft">&#160;</td><td class="mdescRight">Update the states of all joysticks.  <a href="#ab85fa9175b4edd3e5a07ee3cde0b0f48">More...</a><br /></td></tr>
<tr class="separator:ab85fa9175b4edd3e5a07ee3cde0b0f48"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Give access to the real-time state of the joysticks. </p>
<p><a class="el" href="classsf_1_1Joystick.php" title="Give access to the real-time state of the joysticks. ">sf::Joystick</a> provides an interface to the state of the joysticks.</p>
<p>It only contains static functions, so it's not meant to be instantiated. Instead, each joystick is identified by an index that is passed to the functions of this class.</p>
<p>This class allows users to query the state of joysticks at any time and directly, without having to deal with a window and its events. Compared to the JoystickMoved, JoystickButtonPressed and JoystickButtonReleased events, <a class="el" href="classsf_1_1Joystick.php" title="Give access to the real-time state of the joysticks. ">sf::Joystick</a> can retrieve the state of axes and buttons of joysticks at any time (you don't need to store and update a boolean on your side in order to know if a button is pressed or released), and you always get the real state of joysticks, even if they are moved, pressed or released when your window is out of focus and no event is triggered.</p>
<p>SFML supports: </p><ul>
<li>8 joysticks (<a class="el" href="classsf_1_1Joystick.php#a951a7c775921304a5f3443c6e2bb4d65a6e0a2a95bc1da277610c04d80f52715e" title="Maximum number of supported joysticks. ">sf::Joystick::Count</a>) </li>
<li>32 buttons per joystick (<a class="el" href="classsf_1_1Joystick.php#a951a7c775921304a5f3443c6e2bb4d65a2f1b8a0a59f2c12a4775c0e1e69e1816" title="Maximum number of supported buttons. ">sf::Joystick::ButtonCount</a>) </li>
<li>8 axes per joystick (<a class="el" href="classsf_1_1Joystick.php#a951a7c775921304a5f3443c6e2bb4d65accf3e487c9f6ee2f384351323626a42c" title="Maximum number of supported axes. ">sf::Joystick::AxisCount</a>)</li>
</ul>
<p>Unlike the keyboard or mouse, the state of joysticks is sometimes not directly available (depending on the OS), therefore an <a class="el" href="classsf_1_1Joystick.php#ab85fa9175b4edd3e5a07ee3cde0b0f48" title="Update the states of all joysticks. ">update()</a> function must be called in order to update the current state of joysticks. When you have a window with event handling, this is done automatically, you don't need to call anything. But if you have no window, or if you want to check joysticks state before creating one, you must call <a class="el" href="classsf_1_1Joystick.php#ab85fa9175b4edd3e5a07ee3cde0b0f48" title="Update the states of all joysticks. ">sf::Joystick::update</a> explicitly.</p>
<p>Usage example: </p><div class="fragment"><div class="line"><span class="comment">// Is joystick #0 connected?</span></div>
<div class="line"><span class="keywordtype">bool</span> connected = <a class="code" href="classsf_1_1Joystick.php#ac7d4e1923e9f9420174f26703ea63d6c">sf::Joystick::isConnected</a>(0);</div>
<div class="line"></div>
<div class="line"><span class="comment">// How many buttons does joystick #0 support?</span></div>
<div class="line"><span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> buttons = <a class="code" href="classsf_1_1Joystick.php#a4de9f445c6582bfe9f0873f695682885">sf::Joystick::getButtonCount</a>(0);</div>
<div class="line"></div>
<div class="line"><span class="comment">// Does joystick #0 define a X axis?</span></div>
<div class="line"><span class="keywordtype">bool</span> hasX = <a class="code" href="classsf_1_1Joystick.php#a268e8f2a11ae6af4a47c727cb4ab4d95">sf::Joystick::hasAxis</a>(0, <a class="code" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a95dc8b9bf7b0a2157fc67891c54c401e">sf::Joystick::X</a>);</div>
<div class="line"></div>
<div class="line"><span class="comment">// Is button #2 pressed on joystick #0?</span></div>
<div class="line"><span class="keywordtype">bool</span> pressed = <a class="code" href="classsf_1_1Joystick.php#ae0d97a4b84268cbe6a7078e1b2717835">sf::Joystick::isButtonPressed</a>(0, 2);</div>
<div class="line"></div>
<div class="line"><span class="comment">// What&#39;s the current position of the Y axis on joystick #0?</span></div>
<div class="line"><span class="keywordtype">float</span> position = <a class="code" href="classsf_1_1Joystick.php#aea4930193331df1851b709f3060ba58b">sf::Joystick::getAxisPosition</a>(0, <a class="code" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a51ef1455f7511ad4a78ba241d66593ce">sf::Joystick::Y</a>);</div>
</div><!-- fragment --><dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Keyboard.php" title="Give access to the real-time state of the keyboard. ">sf::Keyboard</a>, <a class="el" href="classsf_1_1Mouse.php" title="Give access to the real-time state of the mouse. ">sf::Mouse</a> </dd></dl>

<p>Definition at line <a class="el" href="Joystick_8hpp_source.php#l00041">41</a> of file <a class="el" href="Joystick_8hpp_source.php">Joystick.hpp</a>.</p>
</div><h2 class="groupheader">Member Enumeration Documentation</h2>
<a class="anchor" id="a951a7c775921304a5f3443c6e2bb4d65"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">anonymous enum</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Constants related to joysticks capabilities. </p>
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><a class="anchor" id="a951a7c775921304a5f3443c6e2bb4d65a6e0a2a95bc1da277610c04d80f52715e"></a>Count&#160;</td><td class="fielddoc">
<p>Maximum number of supported joysticks. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a951a7c775921304a5f3443c6e2bb4d65a2f1b8a0a59f2c12a4775c0e1e69e1816"></a>ButtonCount&#160;</td><td class="fielddoc">
<p>Maximum number of supported buttons. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a951a7c775921304a5f3443c6e2bb4d65accf3e487c9f6ee2f384351323626a42c"></a>AxisCount&#160;</td><td class="fielddoc">
<p>Maximum number of supported axes. </p>
</td></tr>
</table>

<p>Definition at line <a class="el" href="Joystick_8hpp_source.php#l00049">49</a> of file <a class="el" href="Joystick_8hpp_source.php">Joystick.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="a48db337092c2e263774f94de6d50baa7"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7">sf::Joystick::Axis</a></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Axes supported by SFML joysticks. </p>
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><a class="anchor" id="a48db337092c2e263774f94de6d50baa7a95dc8b9bf7b0a2157fc67891c54c401e"></a>X&#160;</td><td class="fielddoc">
<p>The X axis. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a48db337092c2e263774f94de6d50baa7a51ef1455f7511ad4a78ba241d66593ce"></a>Y&#160;</td><td class="fielddoc">
<p>The Y axis. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a48db337092c2e263774f94de6d50baa7a7c37a1240b2dafbbfc5c1a0e23911315"></a>Z&#160;</td><td class="fielddoc">
<p>The Z axis. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a48db337092c2e263774f94de6d50baa7aeebbcdb0828850f4d69e6a084801fab8"></a>R&#160;</td><td class="fielddoc">
<p>The R axis. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a48db337092c2e263774f94de6d50baa7a0a901f61e75292dd2f642b6e4f33a214"></a>U&#160;</td><td class="fielddoc">
<p>The U axis. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a48db337092c2e263774f94de6d50baa7aa2e2c8ffa1837e7911ee0c7d045bf8f4"></a>V&#160;</td><td class="fielddoc">
<p>The V axis. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a48db337092c2e263774f94de6d50baa7a06420f7714e4dfd8b841885a0b5f3954"></a>PovX&#160;</td><td class="fielddoc">
<p>The X axis of the point-of-view hat. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a48db337092c2e263774f94de6d50baa7a0f8ffb2dcddf91b98ab910a4f8327ad9"></a>PovY&#160;</td><td class="fielddoc">
<p>The Y axis of the point-of-view hat. </p>
</td></tr>
</table>

<p>Definition at line <a class="el" href="Joystick_8hpp_source.php#l00060">60</a> of file <a class="el" href="Joystick_8hpp_source.php">Joystick.hpp</a>.</p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="aea4930193331df1851b709f3060ba58b"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static float sf::Joystick::getAxisPosition </td>
          <td>(</td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>joystick</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7">Axis</a>&#160;</td>
          <td class="paramname"><em>axis</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the current position of a joystick axis. </p>
<p>If the joystick is not connected, this function returns 0.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">joystick</td><td>Index of the joystick </td></tr>
    <tr><td class="paramname">axis</td><td>Axis to check</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Current position of the axis, in range [-100 .. 100] </dd></dl>

</div>
</div>
<a class="anchor" id="a4de9f445c6582bfe9f0873f695682885"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static unsigned int sf::Joystick::getButtonCount </td>
          <td>(</td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>joystick</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Return the number of buttons supported by a joystick. </p>
<p>If the joystick is not connected, this function returns 0.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">joystick</td><td>Index of the joystick</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Number of buttons supported by the joystick </dd></dl>

</div>
</div>
<a class="anchor" id="aa917c9435330e6e0368d3893672d1b74"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="structsf_1_1Joystick_1_1Identification.php">Identification</a> sf::Joystick::getIdentification </td>
          <td>(</td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>joystick</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the joystick information. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">joystick</td><td>Index of the joystick</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Structure containing joystick information. </dd></dl>

</div>
</div>
<a class="anchor" id="a268e8f2a11ae6af4a47c727cb4ab4d95"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static bool sf::Joystick::hasAxis </td>
          <td>(</td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>joystick</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7">Axis</a>&#160;</td>
          <td class="paramname"><em>axis</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Check if a joystick supports a given axis. </p>
<p>If the joystick is not connected, this function returns false.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">joystick</td><td>Index of the joystick </td></tr>
    <tr><td class="paramname">axis</td><td>Axis to check</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if the joystick supports the axis, false otherwise </dd></dl>

</div>
</div>
<a class="anchor" id="ae0d97a4b84268cbe6a7078e1b2717835"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static bool sf::Joystick::isButtonPressed </td>
          <td>(</td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>joystick</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>button</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Check if a joystick button is pressed. </p>
<p>If the joystick is not connected, this function returns false.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">joystick</td><td>Index of the joystick </td></tr>
    <tr><td class="paramname">button</td><td>Button to check</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if the button is pressed, false otherwise </dd></dl>

</div>
</div>
<a class="anchor" id="ac7d4e1923e9f9420174f26703ea63d6c"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static bool sf::Joystick::isConnected </td>
          <td>(</td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>joystick</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Check if a joystick is connected. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">joystick</td><td>Index of the joystick to check</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if the joystick is connected, false otherwise </dd></dl>

</div>
</div>
<a class="anchor" id="ab85fa9175b4edd3e5a07ee3cde0b0f48"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static void sf::Joystick::update </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Update the states of all joysticks. </p>
<p>This function is used internally by SFML, so you normally don't have to call it explicitly. However, you may need to call it if you have no window yet (or no window at all): in this case the joystick states are not updated automatically. </p>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="Joystick_8hpp_source.php">Joystick.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer.php");
?>

<?php
    $version = '2.2'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Sprite.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.8 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_7107138a9ca528d5a30fb6c42d13b481.php">SFML</a></li><li class="navelem"><a class="el" href="dir_186e0dcb96ed2747fde77bc4d13d2016.php">include</a></li><li class="navelem"><a class="el" href="dir_8300c2a4f3c47520e59b1ed4cebc1d64.php">SFML</a></li><li class="navelem"><a class="el" href="dir_c35206ee16f5142ebcf86ff0b09d4086.php">Graphics</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Sprite.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2014 Laurent Gomila (laurent.gom@gmail.com)</span></div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div>
<div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div>
<div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div>
<div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div>
<div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div>
<div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div>
<div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div>
<div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_SPRITE_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_SPRITE_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Graphics/Export.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/Drawable.hpp&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/Transformable.hpp&gt;</span></div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/Vertex.hpp&gt;</span></div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/Rect.hpp&gt;</span></div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;</div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;</div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div>
<div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;{</div>
<div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;<span class="keyword">class </span>Texture;</div>
<div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;</div>
<div class="line"><a name="l00047"></a><span class="lineno"><a class="line" href="classsf_1_1Sprite.php">   47</a></span>&#160;<span class="keyword">class </span>SFML_GRAPHICS_API <a class="code" href="classsf_1_1Sprite.php">Sprite</a> : <span class="keyword">public</span> <a class="code" href="classsf_1_1Drawable.php">Drawable</a>, <span class="keyword">public</span> <a class="code" href="classsf_1_1Transformable.php">Transformable</a></div>
<div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;{</div>
<div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;<span class="keyword">public</span>:</div>
<div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;</div>
<div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;    <a class="code" href="classsf_1_1Sprite.php">Sprite</a>();</div>
<div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;</div>
<div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;    <span class="keyword">explicit</span> <a class="code" href="classsf_1_1Sprite.php">Sprite</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1Texture.php">Texture</a>&amp; texture);</div>
<div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;</div>
<div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;    <a class="code" href="classsf_1_1Sprite.php">Sprite</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1Texture.php">Texture</a>&amp; texture, <span class="keyword">const</span> <a class="code" href="classsf_1_1Rect.php">IntRect</a>&amp; rectangle);</div>
<div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;</div>
<div class="line"><a name="l00099"></a><span class="lineno">   99</span>&#160;    <span class="keywordtype">void</span> setTexture(<span class="keyword">const</span> <a class="code" href="classsf_1_1Texture.php">Texture</a>&amp; texture, <span class="keywordtype">bool</span> resetRect = <span class="keyword">false</span>);</div>
<div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;</div>
<div class="line"><a name="l00113"></a><span class="lineno">  113</span>&#160;    <span class="keywordtype">void</span> setTextureRect(<span class="keyword">const</span> <a class="code" href="classsf_1_1Rect.php">IntRect</a>&amp; rectangle);</div>
<div class="line"><a name="l00114"></a><span class="lineno">  114</span>&#160;</div>
<div class="line"><a name="l00128"></a><span class="lineno">  128</span>&#160;    <span class="keywordtype">void</span> setColor(<span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a>&amp; color);</div>
<div class="line"><a name="l00129"></a><span class="lineno">  129</span>&#160;</div>
<div class="line"><a name="l00142"></a><span class="lineno">  142</span>&#160;    <span class="keyword">const</span> <a class="code" href="classsf_1_1Texture.php">Texture</a>* getTexture() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00143"></a><span class="lineno">  143</span>&#160;</div>
<div class="line"><a name="l00152"></a><span class="lineno">  152</span>&#160;    <span class="keyword">const</span> <a class="code" href="classsf_1_1Rect.php">IntRect</a>&amp; getTextureRect() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00153"></a><span class="lineno">  153</span>&#160;</div>
<div class="line"><a name="l00162"></a><span class="lineno">  162</span>&#160;    <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a>&amp; getColor() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00163"></a><span class="lineno">  163</span>&#160;</div>
<div class="line"><a name="l00176"></a><span class="lineno">  176</span>&#160;    <a class="code" href="classsf_1_1Rect.php">FloatRect</a> getLocalBounds() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00177"></a><span class="lineno">  177</span>&#160;</div>
<div class="line"><a name="l00190"></a><span class="lineno">  190</span>&#160;    <a class="code" href="classsf_1_1Rect.php">FloatRect</a> getGlobalBounds() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00191"></a><span class="lineno">  191</span>&#160;</div>
<div class="line"><a name="l00192"></a><span class="lineno">  192</span>&#160;<span class="keyword">private</span>:</div>
<div class="line"><a name="l00193"></a><span class="lineno">  193</span>&#160;</div>
<div class="line"><a name="l00201"></a><span class="lineno">  201</span>&#160;    <span class="keyword">virtual</span> <span class="keywordtype">void</span> draw(<a class="code" href="classsf_1_1RenderTarget.php">RenderTarget</a>&amp; target, <a class="code" href="classsf_1_1RenderStates.php">RenderStates</a> states) <span class="keyword">const</span>;</div>
<div class="line"><a name="l00202"></a><span class="lineno">  202</span>&#160;</div>
<div class="line"><a name="l00207"></a><span class="lineno">  207</span>&#160;    <span class="keywordtype">void</span> updatePositions();</div>
<div class="line"><a name="l00208"></a><span class="lineno">  208</span>&#160;</div>
<div class="line"><a name="l00213"></a><span class="lineno">  213</span>&#160;    <span class="keywordtype">void</span> updateTexCoords();</div>
<div class="line"><a name="l00214"></a><span class="lineno">  214</span>&#160;</div>
<div class="line"><a name="l00216"></a><span class="lineno">  216</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00218"></a><span class="lineno">  218</span>&#160;<span class="comment"></span>    <a class="code" href="classsf_1_1Vertex.php">Vertex</a>         m_vertices[4]; </div>
<div class="line"><a name="l00219"></a><span class="lineno">  219</span>&#160;    <span class="keyword">const</span> <a class="code" href="classsf_1_1Texture.php">Texture</a>* m_texture;     </div>
<div class="line"><a name="l00220"></a><span class="lineno">  220</span>&#160;    <a class="code" href="classsf_1_1Rect.php">IntRect</a>        m_textureRect; </div>
<div class="line"><a name="l00221"></a><span class="lineno">  221</span>&#160;};</div>
<div class="line"><a name="l00222"></a><span class="lineno">  222</span>&#160;</div>
<div class="line"><a name="l00223"></a><span class="lineno">  223</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00224"></a><span class="lineno">  224</span>&#160;</div>
<div class="line"><a name="l00225"></a><span class="lineno">  225</span>&#160;</div>
<div class="line"><a name="l00226"></a><span class="lineno">  226</span>&#160;<span class="preprocessor">#endif // SFML_SPRITE_HPP</span></div>
<div class="line"><a name="l00227"></a><span class="lineno">  227</span>&#160;</div>
<div class="line"><a name="l00228"></a><span class="lineno">  228</span>&#160;</div>
<div class="ttc" id="classsf_1_1Transformable_php"><div class="ttname"><a href="classsf_1_1Transformable.php">sf::Transformable</a></div><div class="ttdoc">Decomposed transform defined by a position, a rotation and a scale. </div><div class="ttdef"><b>Definition:</b> <a href="Transformable_8hpp_source.php#l00041">Transformable.hpp:41</a></div></div>
<div class="ttc" id="classsf_1_1Color_php"><div class="ttname"><a href="classsf_1_1Color.php">sf::Color</a></div><div class="ttdoc">Utility class for manipulating RGBA colors. </div><div class="ttdef"><b>Definition:</b> <a href="Color_8hpp_source.php#l00040">Color.hpp:40</a></div></div>
<div class="ttc" id="classsf_1_1Vertex_php"><div class="ttname"><a href="classsf_1_1Vertex.php">sf::Vertex</a></div><div class="ttdoc">Define a point with color and texture coordinates. </div><div class="ttdef"><b>Definition:</b> <a href="Vertex_8hpp_source.php#l00042">Vertex.hpp:42</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="Listener_8hpp_source.php#l00035">Listener.hpp:35</a></div></div>
<div class="ttc" id="classsf_1_1RenderStates_php"><div class="ttname"><a href="classsf_1_1RenderStates.php">sf::RenderStates</a></div><div class="ttdoc">Define the states used for drawing to a RenderTarget. </div><div class="ttdef"><b>Definition:</b> <a href="RenderStates_8hpp_source.php#l00045">RenderStates.hpp:45</a></div></div>
<div class="ttc" id="classsf_1_1Drawable_php"><div class="ttname"><a href="classsf_1_1Drawable.php">sf::Drawable</a></div><div class="ttdoc">Abstract base class for objects that can be drawn to a render target. </div><div class="ttdef"><b>Definition:</b> <a href="Drawable_8hpp_source.php#l00044">Drawable.hpp:44</a></div></div>
<div class="ttc" id="classsf_1_1Rect_php"><div class="ttname"><a href="classsf_1_1Rect.php">sf::Rect&lt; int &gt;</a></div></div>
<div class="ttc" id="classsf_1_1Texture_php"><div class="ttname"><a href="classsf_1_1Texture.php">sf::Texture</a></div><div class="ttdoc">Image living on the graphics card that can be used for drawing. </div><div class="ttdef"><b>Definition:</b> <a href="Texture_8hpp_source.php#l00047">Texture.hpp:47</a></div></div>
<div class="ttc" id="classsf_1_1RenderTarget_php"><div class="ttname"><a href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></div><div class="ttdoc">Base class for all render targets (window, texture, ...) </div><div class="ttdef"><b>Definition:</b> <a href="RenderTarget_8hpp_source.php#l00051">RenderTarget.hpp:51</a></div></div>
<div class="ttc" id="classsf_1_1Sprite_php"><div class="ttname"><a href="classsf_1_1Sprite.php">sf::Sprite</a></div><div class="ttdoc">Drawable representation of a texture, with its own transformations, color, etc. </div><div class="ttdef"><b>Definition:</b> <a href="Sprite_8hpp_source.php#l00047">Sprite.hpp:47</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>

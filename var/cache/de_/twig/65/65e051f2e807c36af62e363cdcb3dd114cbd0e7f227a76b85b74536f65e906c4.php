<?php

/* baseList.html.twig */
class __TwigTemplate_eefca75f972bf4d03d94dc7d1705b81e3359b3cb23e3cdaf05222faa41e2e182 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "baseList.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'title' => array($this, 'block_title'),
            'bodyList' => array($this, 'block_bodyList'),
            'javascripts' => array($this, 'block_javascripts'),
            'active' => array($this, 'block_active'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f1032dbb75c5f8c6520f2d339cac86d603f3bb871d69903b13c7020d014d263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f1032dbb75c5f8c6520f2d339cac86d603f3bb871d69903b13c7020d014d263->enter($__internal_6f1032dbb75c5f8c6520f2d339cac86d603f3bb871d69903b13c7020d014d263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseList.html.twig"));

        $__internal_3d489ff41f12a2b6734d3717aa28a856c02374e3c40a8629d16f69223dc97d4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d489ff41f12a2b6734d3717aa28a856c02374e3c40a8629d16f69223dc97d4f->enter($__internal_3d489ff41f12a2b6734d3717aa28a856c02374e3c40a8629d16f69223dc97d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f1032dbb75c5f8c6520f2d339cac86d603f3bb871d69903b13c7020d014d263->leave($__internal_6f1032dbb75c5f8c6520f2d339cac86d603f3bb871d69903b13c7020d014d263_prof);

        
        $__internal_3d489ff41f12a2b6734d3717aa28a856c02374e3c40a8629d16f69223dc97d4f->leave($__internal_3d489ff41f12a2b6734d3717aa28a856c02374e3c40a8629d16f69223dc97d4f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2e700001775de5cd711775207d761575968a9d31b35c1534cb451c7e182a6bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2e700001775de5cd711775207d761575968a9d31b35c1534cb451c7e182a6bb->enter($__internal_c2e700001775de5cd711775207d761575968a9d31b35c1534cb451c7e182a6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a7c4550360924695766468aef26ca37bb48054993d79e8e8b5ae95a36698d589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7c4550360924695766468aef26ca37bb48054993d79e8e8b5ae95a36698d589->enter($__internal_a7c4550360924695766468aef26ca37bb48054993d79e8e8b5ae95a36698d589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
\t<!-- PAGE CONTENT WRAPPER -->
        <div class=\"page-content-wrap\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    
                    <!-- START DATATABLE EXPORT -->
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</h3>
                            <div class=\"btn-group pull-right\">
                                <button class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bars\"></i> Export Data</button>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'json',escape:'false'});\"><img src='";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/json.png"), "html", null, true);
        echo "' width=\"24\"/> JSON</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});\"><img src='";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/json.png"), "html", null, true);
        echo "' width=\"24\"/> JSON (ignoreColumn)</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'json',escape:'true'});\"><img src='";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/json.png"), "html", null, true);
        echo "' width=\"24\"/> JSON (with Escape)</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'xml',escape:'false'});\"><img src='";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/xml.png"), "html", null, true);
        echo "' width=\"24\"/> XML</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'sql'});\"><img src='";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/sql.png"), "html", null, true);
        echo "' width=\"24\"/> SQL</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'csv',escape:'false'});\"><img src='";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/csv.png"), "html", null, true);
        echo "' width=\"24\"/> CSV</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'txt',escape:'false'});\"><img src='";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/txt.png"), "html", null, true);
        echo "' width=\"24\"/> TXT</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'excel',escape:'false'});\"><img src='";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/xls.png"), "html", null, true);
        echo "' width=\"24\"/> XLS</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'doc',escape:'false'});\"><img src='";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/word.png"), "html", null, true);
        echo "' width=\"24\"/> Word</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'powerpoint',escape:'false'});\"><img src='";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/ppt.png"), "html", null, true);
        echo "' width=\"24\"/> PowerPoint</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'png',escape:'false'});\"><img src='";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/png.png"), "html", null, true);
        echo "' width=\"24\"/> PNG</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'pdf',escape:'false'});\"><img src='";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/pdf.png"), "html", null, true);
        echo "' width=\"24\"/> PDF</a></li>
                                </ul>
                            </div>                                    
                            
                        </div>
                        <div class=\"panel-body\">
                           ";
        // line 37
        $this->displayBlock('bodyList', $context, $blocks);
        // line 39
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>

\t
";
        
        $__internal_a7c4550360924695766468aef26ca37bb48054993d79e8e8b5ae95a36698d589->leave($__internal_a7c4550360924695766468aef26ca37bb48054993d79e8e8b5ae95a36698d589_prof);

        
        $__internal_c2e700001775de5cd711775207d761575968a9d31b35c1534cb451c7e182a6bb->leave($__internal_c2e700001775de5cd711775207d761575968a9d31b35c1534cb451c7e182a6bb_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_5347daa7c21424dadb8821b301c066ca9a1172eab6e1781fb16362601f6cf955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5347daa7c21424dadb8821b301c066ca9a1172eab6e1781fb16362601f6cf955->enter($__internal_5347daa7c21424dadb8821b301c066ca9a1172eab6e1781fb16362601f6cf955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4f55a3f3ceb8938cf40887dbb83629f781b3890ecc45475ce667f0c0d34cf473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f55a3f3ceb8938cf40887dbb83629f781b3890ecc45475ce667f0c0d34cf473->enter($__internal_4f55a3f3ceb8938cf40887dbb83629f781b3890ecc45475ce667f0c0d34cf473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4f55a3f3ceb8938cf40887dbb83629f781b3890ecc45475ce667f0c0d34cf473->leave($__internal_4f55a3f3ceb8938cf40887dbb83629f781b3890ecc45475ce667f0c0d34cf473_prof);

        
        $__internal_5347daa7c21424dadb8821b301c066ca9a1172eab6e1781fb16362601f6cf955->leave($__internal_5347daa7c21424dadb8821b301c066ca9a1172eab6e1781fb16362601f6cf955_prof);

    }

    // line 37
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_3dbfd8949e052fc93055db41d9518168ecc87b46b32d5255a0cfc178bfc122ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dbfd8949e052fc93055db41d9518168ecc87b46b32d5255a0cfc178bfc122ef->enter($__internal_3dbfd8949e052fc93055db41d9518168ecc87b46b32d5255a0cfc178bfc122ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_e7bd273aeada1026999400efb6aa0c4441614f9019b98a61a216ada105bf21a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7bd273aeada1026999400efb6aa0c4441614f9019b98a61a216ada105bf21a4->enter($__internal_e7bd273aeada1026999400efb6aa0c4441614f9019b98a61a216ada105bf21a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 38
        echo "                           ";
        
        $__internal_e7bd273aeada1026999400efb6aa0c4441614f9019b98a61a216ada105bf21a4->leave($__internal_e7bd273aeada1026999400efb6aa0c4441614f9019b98a61a216ada105bf21a4_prof);

        
        $__internal_3dbfd8949e052fc93055db41d9518168ecc87b46b32d5255a0cfc178bfc122ef->leave($__internal_3dbfd8949e052fc93055db41d9518168ecc87b46b32d5255a0cfc178bfc122ef_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b3890cd52ae776d50924677408f8b16ca2657e6322eb03ed0f4206be712bf66b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3890cd52ae776d50924677408f8b16ca2657e6322eb03ed0f4206be712bf66b->enter($__internal_b3890cd52ae776d50924677408f8b16ca2657e6322eb03ed0f4206be712bf66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f1de4dd797aacd4bf5f2d9978b3d4cc8ffcd276f00dc288971a82560c97b2a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1de4dd797aacd4bf5f2d9978b3d4cc8ffcd276f00dc288971a82560c97b2a01->enter($__internal_f1de4dd797aacd4bf5f2d9978b3d4cc8ffcd276f00dc288971a82560c97b2a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 49
        echo "        
    <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/tableExport.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/jquery.base64.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/html2canvas.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/jspdf/libs/sprintf.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/jspdf/jspdf.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/jspdf/libs/base64.js"), "html", null, true);
        echo "\"></script>  

    ";
        // line 58
        $this->displayBlock('active', $context, $blocks);
        // line 59
        echo "      
       

";
        
        $__internal_f1de4dd797aacd4bf5f2d9978b3d4cc8ffcd276f00dc288971a82560c97b2a01->leave($__internal_f1de4dd797aacd4bf5f2d9978b3d4cc8ffcd276f00dc288971a82560c97b2a01_prof);

        
        $__internal_b3890cd52ae776d50924677408f8b16ca2657e6322eb03ed0f4206be712bf66b->leave($__internal_b3890cd52ae776d50924677408f8b16ca2657e6322eb03ed0f4206be712bf66b_prof);

    }

    // line 58
    public function block_active($context, array $blocks = array())
    {
        $__internal_a4da748b3664435f2a3caec2799f495002a8a0472440571ca42ffc74d36e73e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4da748b3664435f2a3caec2799f495002a8a0472440571ca42ffc74d36e73e4->enter($__internal_a4da748b3664435f2a3caec2799f495002a8a0472440571ca42ffc74d36e73e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_75e5697f37a93e67f1906f7674e5e98661fe369c304ff9ea3fe4a94e9ddf1b54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e5697f37a93e67f1906f7674e5e98661fe369c304ff9ea3fe4a94e9ddf1b54->enter($__internal_75e5697f37a93e67f1906f7674e5e98661fe369c304ff9ea3fe4a94e9ddf1b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 59
        echo "    ";
        
        $__internal_75e5697f37a93e67f1906f7674e5e98661fe369c304ff9ea3fe4a94e9ddf1b54->leave($__internal_75e5697f37a93e67f1906f7674e5e98661fe369c304ff9ea3fe4a94e9ddf1b54_prof);

        
        $__internal_a4da748b3664435f2a3caec2799f495002a8a0472440571ca42ffc74d36e73e4->leave($__internal_a4da748b3664435f2a3caec2799f495002a8a0472440571ca42ffc74d36e73e4_prof);

    }

    public function getTemplateName()
    {
        return "baseList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 59,  239 => 58,  226 => 59,  224 => 58,  219 => 56,  215 => 55,  211 => 54,  207 => 53,  203 => 52,  199 => 51,  195 => 50,  192 => 49,  183 => 48,  173 => 38,  164 => 37,  147 => 12,  130 => 39,  128 => 37,  119 => 31,  115 => 30,  110 => 28,  106 => 27,  102 => 26,  97 => 24,  93 => 23,  88 => 21,  84 => 20,  79 => 18,  75 => 17,  71 => 16,  64 => 12,  53 => 3,  44 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base2.html.twig' %}
{% block body %}

\t<!-- PAGE CONTENT WRAPPER -->
        <div class=\"page-content-wrap\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    
                    <!-- START DATATABLE EXPORT -->
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">{% block title %}{% endblock %}</h3>
                            <div class=\"btn-group pull-right\">
                                <button class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bars\"></i> Export Data</button>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'json',escape:'false'});\"><img src='{{ asset(\"img/icons/json.png\")}}' width=\"24\"/> JSON</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});\"><img src='{{ asset(\"img/icons/json.png\")}}' width=\"24\"/> JSON (ignoreColumn)</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'json',escape:'true'});\"><img src='{{ asset(\"img/icons/json.png\")}}' width=\"24\"/> JSON (with Escape)</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'xml',escape:'false'});\"><img src='{{ asset(\"img/icons/xml.png\")}}' width=\"24\"/> XML</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'sql'});\"><img src='{{ asset(\"img/icons/sql.png\")}}' width=\"24\"/> SQL</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'csv',escape:'false'});\"><img src='{{ asset(\"img/icons/csv.png\")}}' width=\"24\"/> CSV</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'txt',escape:'false'});\"><img src='{{ asset(\"img/icons/txt.png\")}}' width=\"24\"/> TXT</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'excel',escape:'false'});\"><img src='{{ asset(\"img/icons/xls.png\")}}' width=\"24\"/> XLS</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'doc',escape:'false'});\"><img src='{{ asset(\"img/icons/word.png\")}}' width=\"24\"/> Word</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'powerpoint',escape:'false'});\"><img src='{{ asset(\"img/icons/ppt.png\")}}' width=\"24\"/> PowerPoint</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'png',escape:'false'});\"><img src='{{ asset(\"img/icons/png.png\")}}' width=\"24\"/> PNG</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'pdf',escape:'false'});\"><img src='{{ asset(\"img/icons/pdf.png\")}}' width=\"24\"/> PDF</a></li>
                                </ul>
                            </div>                                    
                            
                        </div>
                        <div class=\"panel-body\">
                           {% block bodyList %}
                           {% endblock %}
                        </div>
                    </div>
                </div>
            </div>
        </div>

\t
{% endblock %}

{% block javascripts %}
        
    <script type=\"text/javascript\" src=\"{{ asset('js/plugins/datatables/jquery.dataTables.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/plugins/tableexport/tableExport.js')}}\"></script>
\t<script type=\"text/javascript\" src=\"{{ asset('js/plugins/tableexport/jquery.base64.js')}}\"></script>
\t<script type=\"text/javascript\" src=\"{{ asset('js/plugins/tableexport/html2canvas.js')}}\"></script>
\t<script type=\"text/javascript\" src=\"{{ asset('js/plugins/tableexport/jspdf/libs/sprintf.js')}}\"></script>
\t<script type=\"text/javascript\" src=\"{{ asset('js/plugins/tableexport/jspdf/jspdf.js')}}\"></script>
\t<script type=\"text/javascript\" src=\"{{ asset('js/plugins/tableexport/jspdf/libs/base64.js')}}\"></script>  

    {% block active %}
    {% endblock %}      
       

{% endblock %}  ", "baseList.html.twig", "C:\\wamp64\\www\\SCHOOL\\app\\Resources\\views\\baseList.html.twig");
    }
}

<?php

/* baseList.html.twig */
class __TwigTemplate_b1ce663983b9d74b9b2a78fa0c007739bd5b2d364fc15a17c2af769413c34002 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

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
        // line 3
        return $this->loadTemplate(((twig_in_filter("ROLE_PARENT", $this->getAttribute($this->getAttribute(        // line 1
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()))) ? ("baseParent.html.twig") : ("base2.html.twig")), "baseList.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_178c6c7f0cc81cf7a1c8b50ae6c956a1e49d44ffd618170e004a9ef514c42c6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_178c6c7f0cc81cf7a1c8b50ae6c956a1e49d44ffd618170e004a9ef514c42c6a->enter($__internal_178c6c7f0cc81cf7a1c8b50ae6c956a1e49d44ffd618170e004a9ef514c42c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseList.html.twig"));

        $__internal_7a5684b294ab650cc05aa1aafb53bf2596a68d960a3bd0a7966752fe8a6116f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a5684b294ab650cc05aa1aafb53bf2596a68d960a3bd0a7966752fe8a6116f9->enter($__internal_7a5684b294ab650cc05aa1aafb53bf2596a68d960a3bd0a7966752fe8a6116f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseList.html.twig"));

        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_178c6c7f0cc81cf7a1c8b50ae6c956a1e49d44ffd618170e004a9ef514c42c6a->leave($__internal_178c6c7f0cc81cf7a1c8b50ae6c956a1e49d44ffd618170e004a9ef514c42c6a_prof);

        
        $__internal_7a5684b294ab650cc05aa1aafb53bf2596a68d960a3bd0a7966752fe8a6116f9->leave($__internal_7a5684b294ab650cc05aa1aafb53bf2596a68d960a3bd0a7966752fe8a6116f9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c80bc825638c3bd02d2c0e64182d4666a3305231211b43d2e6925532499675ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c80bc825638c3bd02d2c0e64182d4666a3305231211b43d2e6925532499675ce->enter($__internal_c80bc825638c3bd02d2c0e64182d4666a3305231211b43d2e6925532499675ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c582d547abb8b815fe7e7f03162ea1b48d351c52f2430a79632b00e38918bdf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c582d547abb8b815fe7e7f03162ea1b48d351c52f2430a79632b00e38918bdf0->enter($__internal_c582d547abb8b815fe7e7f03162ea1b48d351c52f2430a79632b00e38918bdf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<!-- PAGE CONTENT WRAPPER -->
        <div class=\"page-content-wrap\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    
                    <!-- START DATATABLE EXPORT -->
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        echo "</h3>
                            <div class=\"btn-group pull-right\">
                                <button class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bars\"></i> Export Data</button>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'json',escape:'false'});\"><img src='";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/json.png"), "html", null, true);
        echo "' width=\"24\"/> JSON</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});\"><img src='";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/json.png"), "html", null, true);
        echo "' width=\"24\"/> JSON (ignoreColumn)</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'json',escape:'true'});\"><img src='";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/json.png"), "html", null, true);
        echo "' width=\"24\"/> JSON (with Escape)</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'xml',escape:'false'});\"><img src='";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/xml.png"), "html", null, true);
        echo "' width=\"24\"/> XML</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'sql'});\"><img src='";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/sql.png"), "html", null, true);
        echo "' width=\"24\"/> SQL</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'csv',escape:'false'});\"><img src='";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/csv.png"), "html", null, true);
        echo "' width=\"24\"/> CSV</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'txt',escape:'false'});\"><img src='";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/txt.png"), "html", null, true);
        echo "' width=\"24\"/> TXT</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'excel',escape:'false'});\"><img src='";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/xls.png"), "html", null, true);
        echo "' width=\"24\"/> XLS</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'doc',escape:'false'});\"><img src='";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/word.png"), "html", null, true);
        echo "' width=\"24\"/> Word</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'powerpoint',escape:'false'});\"><img src='";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/ppt.png"), "html", null, true);
        echo "' width=\"24\"/> PowerPoint</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'png',escape:'false'});\"><img src='";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/png.png"), "html", null, true);
        echo "' width=\"24\"/> PNG</a></li>
                                    <li><a href=\"#\" onClick =\"\$('#customers2').tableExport({type:'pdf',escape:'false'});\"><img src='";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icons/pdf.png"), "html", null, true);
        echo "' width=\"24\"/> PDF</a></li>
                                </ul>
                            </div>                                    
                            
                        </div>
                        <div class=\"panel-body\">
                           ";
        // line 40
        $this->displayBlock('bodyList', $context, $blocks);
        // line 42
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>

\t
";
        
        $__internal_c582d547abb8b815fe7e7f03162ea1b48d351c52f2430a79632b00e38918bdf0->leave($__internal_c582d547abb8b815fe7e7f03162ea1b48d351c52f2430a79632b00e38918bdf0_prof);

        
        $__internal_c80bc825638c3bd02d2c0e64182d4666a3305231211b43d2e6925532499675ce->leave($__internal_c80bc825638c3bd02d2c0e64182d4666a3305231211b43d2e6925532499675ce_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_cfffc5e0869321ac2bee35ee81bd5574993c5d1367c9045698bc2323ab0f3839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfffc5e0869321ac2bee35ee81bd5574993c5d1367c9045698bc2323ab0f3839->enter($__internal_cfffc5e0869321ac2bee35ee81bd5574993c5d1367c9045698bc2323ab0f3839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4087bae3d52c1a031985735f83a3e9649a8ddd78a1363ecea92636074716ffd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4087bae3d52c1a031985735f83a3e9649a8ddd78a1363ecea92636074716ffd9->enter($__internal_4087bae3d52c1a031985735f83a3e9649a8ddd78a1363ecea92636074716ffd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4087bae3d52c1a031985735f83a3e9649a8ddd78a1363ecea92636074716ffd9->leave($__internal_4087bae3d52c1a031985735f83a3e9649a8ddd78a1363ecea92636074716ffd9_prof);

        
        $__internal_cfffc5e0869321ac2bee35ee81bd5574993c5d1367c9045698bc2323ab0f3839->leave($__internal_cfffc5e0869321ac2bee35ee81bd5574993c5d1367c9045698bc2323ab0f3839_prof);

    }

    // line 40
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_010619626a00c984d90a64b88eefab4f305061946928c830bcdba492e62fa873 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_010619626a00c984d90a64b88eefab4f305061946928c830bcdba492e62fa873->enter($__internal_010619626a00c984d90a64b88eefab4f305061946928c830bcdba492e62fa873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_b4c092a91b3adae4e81abd7f37491045dfbb1d3e4782cfdc746156a754a673f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4c092a91b3adae4e81abd7f37491045dfbb1d3e4782cfdc746156a754a673f9->enter($__internal_b4c092a91b3adae4e81abd7f37491045dfbb1d3e4782cfdc746156a754a673f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 41
        echo "                           ";
        
        $__internal_b4c092a91b3adae4e81abd7f37491045dfbb1d3e4782cfdc746156a754a673f9->leave($__internal_b4c092a91b3adae4e81abd7f37491045dfbb1d3e4782cfdc746156a754a673f9_prof);

        
        $__internal_010619626a00c984d90a64b88eefab4f305061946928c830bcdba492e62fa873->leave($__internal_010619626a00c984d90a64b88eefab4f305061946928c830bcdba492e62fa873_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a45592e1a9840d2bffa9bf04ab939b6dc80584b1bfb6adff57f552178a2ef3cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a45592e1a9840d2bffa9bf04ab939b6dc80584b1bfb6adff57f552178a2ef3cc->enter($__internal_a45592e1a9840d2bffa9bf04ab939b6dc80584b1bfb6adff57f552178a2ef3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d490e1fe84f99c481a6a501493260b2e23bc951629b46f8cfdee938418681a56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d490e1fe84f99c481a6a501493260b2e23bc951629b46f8cfdee938418681a56->enter($__internal_d490e1fe84f99c481a6a501493260b2e23bc951629b46f8cfdee938418681a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "        
    <script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/tableExport.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/jquery.base64.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/html2canvas.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/jspdf/libs/sprintf.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/jspdf/jspdf.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/jspdf/libs/base64.js"), "html", null, true);
        echo "\"></script>  

    ";
        // line 61
        $this->displayBlock('active', $context, $blocks);
        // line 62
        echo "      
       

";
        
        $__internal_d490e1fe84f99c481a6a501493260b2e23bc951629b46f8cfdee938418681a56->leave($__internal_d490e1fe84f99c481a6a501493260b2e23bc951629b46f8cfdee938418681a56_prof);

        
        $__internal_a45592e1a9840d2bffa9bf04ab939b6dc80584b1bfb6adff57f552178a2ef3cc->leave($__internal_a45592e1a9840d2bffa9bf04ab939b6dc80584b1bfb6adff57f552178a2ef3cc_prof);

    }

    // line 61
    public function block_active($context, array $blocks = array())
    {
        $__internal_e9c9d6934f9698ea1491d6a820e008cf8c3ba37486bb1f01f882a35db1b647b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9c9d6934f9698ea1491d6a820e008cf8c3ba37486bb1f01f882a35db1b647b9->enter($__internal_e9c9d6934f9698ea1491d6a820e008cf8c3ba37486bb1f01f882a35db1b647b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_0ff84f64254ec07c55c275ecbe5ed64545bae3e9d98e1659a1e88f7e3648b23f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ff84f64254ec07c55c275ecbe5ed64545bae3e9d98e1659a1e88f7e3648b23f->enter($__internal_0ff84f64254ec07c55c275ecbe5ed64545bae3e9d98e1659a1e88f7e3648b23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 62
        echo "    ";
        
        $__internal_0ff84f64254ec07c55c275ecbe5ed64545bae3e9d98e1659a1e88f7e3648b23f->leave($__internal_0ff84f64254ec07c55c275ecbe5ed64545bae3e9d98e1659a1e88f7e3648b23f_prof);

        
        $__internal_e9c9d6934f9698ea1491d6a820e008cf8c3ba37486bb1f01f882a35db1b647b9->leave($__internal_e9c9d6934f9698ea1491d6a820e008cf8c3ba37486bb1f01f882a35db1b647b9_prof);

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
        return array (  249 => 62,  240 => 61,  227 => 62,  225 => 61,  220 => 59,  216 => 58,  212 => 57,  208 => 56,  204 => 55,  200 => 54,  196 => 53,  193 => 52,  184 => 51,  174 => 41,  165 => 40,  148 => 15,  131 => 42,  129 => 40,  120 => 34,  116 => 33,  111 => 31,  107 => 30,  103 => 29,  98 => 27,  94 => 26,  89 => 24,  85 => 23,  80 => 21,  76 => 20,  72 => 19,  65 => 15,  54 => 6,  45 => 5,  35 => 3,  23 => 1,  22 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'ROLE_PARENT' in app.user.roles 
    ? 'baseParent.html.twig' 
    : 'base2.html.twig' %}

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
       

{% endblock %}  ", "baseList.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/baseList.html.twig");
    }
}

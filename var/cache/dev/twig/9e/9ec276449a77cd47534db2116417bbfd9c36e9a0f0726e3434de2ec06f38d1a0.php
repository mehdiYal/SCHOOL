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
        $__internal_fa6f73bc4c72d7d9f6d4f76ff55654839187c9dcf81e6a743c4363b80cacfd2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa6f73bc4c72d7d9f6d4f76ff55654839187c9dcf81e6a743c4363b80cacfd2c->enter($__internal_fa6f73bc4c72d7d9f6d4f76ff55654839187c9dcf81e6a743c4363b80cacfd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseList.html.twig"));

        $__internal_d2e9f5e29f4c5a97cded95c0a5755e06c206e2415cfd5f09ee42970417c55a78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2e9f5e29f4c5a97cded95c0a5755e06c206e2415cfd5f09ee42970417c55a78->enter($__internal_d2e9f5e29f4c5a97cded95c0a5755e06c206e2415cfd5f09ee42970417c55a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseList.html.twig"));

        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa6f73bc4c72d7d9f6d4f76ff55654839187c9dcf81e6a743c4363b80cacfd2c->leave($__internal_fa6f73bc4c72d7d9f6d4f76ff55654839187c9dcf81e6a743c4363b80cacfd2c_prof);

        
        $__internal_d2e9f5e29f4c5a97cded95c0a5755e06c206e2415cfd5f09ee42970417c55a78->leave($__internal_d2e9f5e29f4c5a97cded95c0a5755e06c206e2415cfd5f09ee42970417c55a78_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b015688847256dc414e09852697c018f943dd8338edcad2e3104e68e272d991b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b015688847256dc414e09852697c018f943dd8338edcad2e3104e68e272d991b->enter($__internal_b015688847256dc414e09852697c018f943dd8338edcad2e3104e68e272d991b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c72274e4dd318f2851c47ddc1b5bdb9e0b9dbb6cdbbb807eecd1317ee00e6e4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c72274e4dd318f2851c47ddc1b5bdb9e0b9dbb6cdbbb807eecd1317ee00e6e4e->enter($__internal_c72274e4dd318f2851c47ddc1b5bdb9e0b9dbb6cdbbb807eecd1317ee00e6e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c72274e4dd318f2851c47ddc1b5bdb9e0b9dbb6cdbbb807eecd1317ee00e6e4e->leave($__internal_c72274e4dd318f2851c47ddc1b5bdb9e0b9dbb6cdbbb807eecd1317ee00e6e4e_prof);

        
        $__internal_b015688847256dc414e09852697c018f943dd8338edcad2e3104e68e272d991b->leave($__internal_b015688847256dc414e09852697c018f943dd8338edcad2e3104e68e272d991b_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa746ccd90b7acab3b36897f5c943a9197a860054827fde4a6f771a9f165abdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa746ccd90b7acab3b36897f5c943a9197a860054827fde4a6f771a9f165abdd->enter($__internal_fa746ccd90b7acab3b36897f5c943a9197a860054827fde4a6f771a9f165abdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c75bb133925a7359d9b10cfc813e7367c207aa8755bebb6f8ca8e3036844ee39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75bb133925a7359d9b10cfc813e7367c207aa8755bebb6f8ca8e3036844ee39->enter($__internal_c75bb133925a7359d9b10cfc813e7367c207aa8755bebb6f8ca8e3036844ee39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c75bb133925a7359d9b10cfc813e7367c207aa8755bebb6f8ca8e3036844ee39->leave($__internal_c75bb133925a7359d9b10cfc813e7367c207aa8755bebb6f8ca8e3036844ee39_prof);

        
        $__internal_fa746ccd90b7acab3b36897f5c943a9197a860054827fde4a6f771a9f165abdd->leave($__internal_fa746ccd90b7acab3b36897f5c943a9197a860054827fde4a6f771a9f165abdd_prof);

    }

    // line 40
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_4d6142532ad4fcf6d8583b439b043b51b7f431f8ef6d0085c59c60a4f66f023a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d6142532ad4fcf6d8583b439b043b51b7f431f8ef6d0085c59c60a4f66f023a->enter($__internal_4d6142532ad4fcf6d8583b439b043b51b7f431f8ef6d0085c59c60a4f66f023a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_4881922a5a691b38339b1fd087ac9af3493279ec2e0a76bd81ecb52e25806744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4881922a5a691b38339b1fd087ac9af3493279ec2e0a76bd81ecb52e25806744->enter($__internal_4881922a5a691b38339b1fd087ac9af3493279ec2e0a76bd81ecb52e25806744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 41
        echo "                           ";
        
        $__internal_4881922a5a691b38339b1fd087ac9af3493279ec2e0a76bd81ecb52e25806744->leave($__internal_4881922a5a691b38339b1fd087ac9af3493279ec2e0a76bd81ecb52e25806744_prof);

        
        $__internal_4d6142532ad4fcf6d8583b439b043b51b7f431f8ef6d0085c59c60a4f66f023a->leave($__internal_4d6142532ad4fcf6d8583b439b043b51b7f431f8ef6d0085c59c60a4f66f023a_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e7158c6e5a5913fd3b69a7971cda715623756e27c7da3b1d281b5785ef2a3fdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7158c6e5a5913fd3b69a7971cda715623756e27c7da3b1d281b5785ef2a3fdc->enter($__internal_e7158c6e5a5913fd3b69a7971cda715623756e27c7da3b1d281b5785ef2a3fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a2bb2cb1e996878fc2d3201800819e4d27bf45f2772720a904c5b9bb69579224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2bb2cb1e996878fc2d3201800819e4d27bf45f2772720a904c5b9bb69579224->enter($__internal_a2bb2cb1e996878fc2d3201800819e4d27bf45f2772720a904c5b9bb69579224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_a2bb2cb1e996878fc2d3201800819e4d27bf45f2772720a904c5b9bb69579224->leave($__internal_a2bb2cb1e996878fc2d3201800819e4d27bf45f2772720a904c5b9bb69579224_prof);

        
        $__internal_e7158c6e5a5913fd3b69a7971cda715623756e27c7da3b1d281b5785ef2a3fdc->leave($__internal_e7158c6e5a5913fd3b69a7971cda715623756e27c7da3b1d281b5785ef2a3fdc_prof);

    }

    // line 61
    public function block_active($context, array $blocks = array())
    {
        $__internal_b1694f6693a328092ce897e0867dd3396685ef943163b4dcb56fd5caeb2caff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1694f6693a328092ce897e0867dd3396685ef943163b4dcb56fd5caeb2caff7->enter($__internal_b1694f6693a328092ce897e0867dd3396685ef943163b4dcb56fd5caeb2caff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_ec8d0fea92222c6004acb5df010fad3f4a0ae58bcaebcfad0a90d57a6cfe41f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec8d0fea92222c6004acb5df010fad3f4a0ae58bcaebcfad0a90d57a6cfe41f0->enter($__internal_ec8d0fea92222c6004acb5df010fad3f4a0ae58bcaebcfad0a90d57a6cfe41f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 62
        echo "    ";
        
        $__internal_ec8d0fea92222c6004acb5df010fad3f4a0ae58bcaebcfad0a90d57a6cfe41f0->leave($__internal_ec8d0fea92222c6004acb5df010fad3f4a0ae58bcaebcfad0a90d57a6cfe41f0_prof);

        
        $__internal_b1694f6693a328092ce897e0867dd3396685ef943163b4dcb56fd5caeb2caff7->leave($__internal_b1694f6693a328092ce897e0867dd3396685ef943163b4dcb56fd5caeb2caff7_prof);

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

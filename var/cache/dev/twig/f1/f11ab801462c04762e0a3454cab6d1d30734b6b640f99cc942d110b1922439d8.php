<?php

/* baseList.html.twig */
class __TwigTemplate_28d95a8f345b33e277ff8c7adcef6e899e15199f7b77c7fd4a32b072b0a627f3 extends Twig_Template
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
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09291270259b2216bd962fc882ca9c3ac7e87ea63fda445d826e05fc3a78e56d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09291270259b2216bd962fc882ca9c3ac7e87ea63fda445d826e05fc3a78e56d->enter($__internal_09291270259b2216bd962fc882ca9c3ac7e87ea63fda445d826e05fc3a78e56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseList.html.twig"));

        $__internal_04e7d2c24538f1e139f968c9b36cabc036b71f7543aa05e787d634c09cdff0aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e7d2c24538f1e139f968c9b36cabc036b71f7543aa05e787d634c09cdff0aa->enter($__internal_04e7d2c24538f1e139f968c9b36cabc036b71f7543aa05e787d634c09cdff0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09291270259b2216bd962fc882ca9c3ac7e87ea63fda445d826e05fc3a78e56d->leave($__internal_09291270259b2216bd962fc882ca9c3ac7e87ea63fda445d826e05fc3a78e56d_prof);

        
        $__internal_04e7d2c24538f1e139f968c9b36cabc036b71f7543aa05e787d634c09cdff0aa->leave($__internal_04e7d2c24538f1e139f968c9b36cabc036b71f7543aa05e787d634c09cdff0aa_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_94750c295099396e64874afe391ceee567964e2074920ff5c1962395a7953ce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94750c295099396e64874afe391ceee567964e2074920ff5c1962395a7953ce4->enter($__internal_94750c295099396e64874afe391ceee567964e2074920ff5c1962395a7953ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_201bf9912bdbc4e7a9cb8bef2b21c162c88c93c47abdd0c8eab49817ef18394f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_201bf9912bdbc4e7a9cb8bef2b21c162c88c93c47abdd0c8eab49817ef18394f->enter($__internal_201bf9912bdbc4e7a9cb8bef2b21c162c88c93c47abdd0c8eab49817ef18394f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_201bf9912bdbc4e7a9cb8bef2b21c162c88c93c47abdd0c8eab49817ef18394f->leave($__internal_201bf9912bdbc4e7a9cb8bef2b21c162c88c93c47abdd0c8eab49817ef18394f_prof);

        
        $__internal_94750c295099396e64874afe391ceee567964e2074920ff5c1962395a7953ce4->leave($__internal_94750c295099396e64874afe391ceee567964e2074920ff5c1962395a7953ce4_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_54b4a591e9ebac3e25c1c57887988b175dbd075adc5960c126cb537f8ce2f69a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54b4a591e9ebac3e25c1c57887988b175dbd075adc5960c126cb537f8ce2f69a->enter($__internal_54b4a591e9ebac3e25c1c57887988b175dbd075adc5960c126cb537f8ce2f69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a4d652da63bc9252964b0db88ab764294340d9d6a3dbd246f4bf92ea373e91f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4d652da63bc9252964b0db88ab764294340d9d6a3dbd246f4bf92ea373e91f4->enter($__internal_a4d652da63bc9252964b0db88ab764294340d9d6a3dbd246f4bf92ea373e91f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a4d652da63bc9252964b0db88ab764294340d9d6a3dbd246f4bf92ea373e91f4->leave($__internal_a4d652da63bc9252964b0db88ab764294340d9d6a3dbd246f4bf92ea373e91f4_prof);

        
        $__internal_54b4a591e9ebac3e25c1c57887988b175dbd075adc5960c126cb537f8ce2f69a->leave($__internal_54b4a591e9ebac3e25c1c57887988b175dbd075adc5960c126cb537f8ce2f69a_prof);

    }

    // line 37
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_c008fe6d117d81f83a236c6b3fcdb4b12e7107787969f16f4ef52acc4b2a7b53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c008fe6d117d81f83a236c6b3fcdb4b12e7107787969f16f4ef52acc4b2a7b53->enter($__internal_c008fe6d117d81f83a236c6b3fcdb4b12e7107787969f16f4ef52acc4b2a7b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_d573480da7dc3bc002bedbb1aa2ea05deb23a52afb8cd6290b3414a84dca3177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d573480da7dc3bc002bedbb1aa2ea05deb23a52afb8cd6290b3414a84dca3177->enter($__internal_d573480da7dc3bc002bedbb1aa2ea05deb23a52afb8cd6290b3414a84dca3177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 38
        echo "                           ";
        
        $__internal_d573480da7dc3bc002bedbb1aa2ea05deb23a52afb8cd6290b3414a84dca3177->leave($__internal_d573480da7dc3bc002bedbb1aa2ea05deb23a52afb8cd6290b3414a84dca3177_prof);

        
        $__internal_c008fe6d117d81f83a236c6b3fcdb4b12e7107787969f16f4ef52acc4b2a7b53->leave($__internal_c008fe6d117d81f83a236c6b3fcdb4b12e7107787969f16f4ef52acc4b2a7b53_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f2e7d69a10d1ef6b58d91b439448b204cca7eaf0f56bab8113b2985a7e2e8c33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2e7d69a10d1ef6b58d91b439448b204cca7eaf0f56bab8113b2985a7e2e8c33->enter($__internal_f2e7d69a10d1ef6b58d91b439448b204cca7eaf0f56bab8113b2985a7e2e8c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_522e1b7a514aaef1e78375497002cbc004faa514a910924a3722a74005adc111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_522e1b7a514aaef1e78375497002cbc004faa514a910924a3722a74005adc111->enter($__internal_522e1b7a514aaef1e78375497002cbc004faa514a910924a3722a74005adc111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_522e1b7a514aaef1e78375497002cbc004faa514a910924a3722a74005adc111->leave($__internal_522e1b7a514aaef1e78375497002cbc004faa514a910924a3722a74005adc111_prof);

        
        $__internal_f2e7d69a10d1ef6b58d91b439448b204cca7eaf0f56bab8113b2985a7e2e8c33->leave($__internal_f2e7d69a10d1ef6b58d91b439448b204cca7eaf0f56bab8113b2985a7e2e8c33_prof);

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
        return array (  218 => 56,  214 => 55,  210 => 54,  206 => 53,  202 => 52,  198 => 51,  194 => 50,  191 => 49,  182 => 48,  172 => 38,  163 => 37,  146 => 12,  129 => 39,  127 => 37,  118 => 31,  114 => 30,  109 => 28,  105 => 27,  101 => 26,  96 => 24,  92 => 23,  87 => 21,  83 => 20,  78 => 18,  74 => 17,  70 => 16,  63 => 12,  52 => 3,  43 => 2,  11 => 1,);
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
       

{% endblock %}  ", "baseList.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/baseList.html.twig");
    }
}

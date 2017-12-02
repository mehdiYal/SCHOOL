<?php

/* ::baseList.html.twig */
class __TwigTemplate_883aee53d8c35a60e74a175851955ba763effe1bb0d56a08e31f11855b1eeca3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "::baseList.html.twig", 1);
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
        $__internal_895db26cb9852cf5722eca6cef0ae307ce99734c2a65b83ac7b9bb7e1e1433fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_895db26cb9852cf5722eca6cef0ae307ce99734c2a65b83ac7b9bb7e1e1433fe->enter($__internal_895db26cb9852cf5722eca6cef0ae307ce99734c2a65b83ac7b9bb7e1e1433fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseList.html.twig"));

        $__internal_6b18c6b7f4aee6ffac0d04794ec71643631c380e0405a5d01c1f96fc0d53ac11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b18c6b7f4aee6ffac0d04794ec71643631c380e0405a5d01c1f96fc0d53ac11->enter($__internal_6b18c6b7f4aee6ffac0d04794ec71643631c380e0405a5d01c1f96fc0d53ac11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_895db26cb9852cf5722eca6cef0ae307ce99734c2a65b83ac7b9bb7e1e1433fe->leave($__internal_895db26cb9852cf5722eca6cef0ae307ce99734c2a65b83ac7b9bb7e1e1433fe_prof);

        
        $__internal_6b18c6b7f4aee6ffac0d04794ec71643631c380e0405a5d01c1f96fc0d53ac11->leave($__internal_6b18c6b7f4aee6ffac0d04794ec71643631c380e0405a5d01c1f96fc0d53ac11_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2664a95955c3f469a77aa699d039d90d70c1a6af37c73f8908ad540aeb845f17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2664a95955c3f469a77aa699d039d90d70c1a6af37c73f8908ad540aeb845f17->enter($__internal_2664a95955c3f469a77aa699d039d90d70c1a6af37c73f8908ad540aeb845f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c5fd9a2ccb8b332095f68a9ce66cc9c18934982a1b691c1b9ecd3a91409e9226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5fd9a2ccb8b332095f68a9ce66cc9c18934982a1b691c1b9ecd3a91409e9226->enter($__internal_c5fd9a2ccb8b332095f68a9ce66cc9c18934982a1b691c1b9ecd3a91409e9226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c5fd9a2ccb8b332095f68a9ce66cc9c18934982a1b691c1b9ecd3a91409e9226->leave($__internal_c5fd9a2ccb8b332095f68a9ce66cc9c18934982a1b691c1b9ecd3a91409e9226_prof);

        
        $__internal_2664a95955c3f469a77aa699d039d90d70c1a6af37c73f8908ad540aeb845f17->leave($__internal_2664a95955c3f469a77aa699d039d90d70c1a6af37c73f8908ad540aeb845f17_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d0074248d4b7e1e8253536d023be52a27f1212b8c96520ea91f0709726310d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d0074248d4b7e1e8253536d023be52a27f1212b8c96520ea91f0709726310d2->enter($__internal_1d0074248d4b7e1e8253536d023be52a27f1212b8c96520ea91f0709726310d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f18ef37c4de59c1cd75e7106467b9716f72a9c2adb75cbe8e56ff2f1f1d61ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f18ef37c4de59c1cd75e7106467b9716f72a9c2adb75cbe8e56ff2f1f1d61ce0->enter($__internal_f18ef37c4de59c1cd75e7106467b9716f72a9c2adb75cbe8e56ff2f1f1d61ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f18ef37c4de59c1cd75e7106467b9716f72a9c2adb75cbe8e56ff2f1f1d61ce0->leave($__internal_f18ef37c4de59c1cd75e7106467b9716f72a9c2adb75cbe8e56ff2f1f1d61ce0_prof);

        
        $__internal_1d0074248d4b7e1e8253536d023be52a27f1212b8c96520ea91f0709726310d2->leave($__internal_1d0074248d4b7e1e8253536d023be52a27f1212b8c96520ea91f0709726310d2_prof);

    }

    // line 37
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_5cb42dd810280762054f5c63f2240f474da61cb09970dc74c1b0a3f9563aea36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cb42dd810280762054f5c63f2240f474da61cb09970dc74c1b0a3f9563aea36->enter($__internal_5cb42dd810280762054f5c63f2240f474da61cb09970dc74c1b0a3f9563aea36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_7015967e8f53f5aa32e8959612e244b4b1eca35d7b885b4dc7d446426e0ac567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7015967e8f53f5aa32e8959612e244b4b1eca35d7b885b4dc7d446426e0ac567->enter($__internal_7015967e8f53f5aa32e8959612e244b4b1eca35d7b885b4dc7d446426e0ac567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 38
        echo "                           ";
        
        $__internal_7015967e8f53f5aa32e8959612e244b4b1eca35d7b885b4dc7d446426e0ac567->leave($__internal_7015967e8f53f5aa32e8959612e244b4b1eca35d7b885b4dc7d446426e0ac567_prof);

        
        $__internal_5cb42dd810280762054f5c63f2240f474da61cb09970dc74c1b0a3f9563aea36->leave($__internal_5cb42dd810280762054f5c63f2240f474da61cb09970dc74c1b0a3f9563aea36_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b8758ab65dcbb4d10260f99ef2b076f566cdf9bd394dd2a7f296e8ff68c20e77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8758ab65dcbb4d10260f99ef2b076f566cdf9bd394dd2a7f296e8ff68c20e77->enter($__internal_b8758ab65dcbb4d10260f99ef2b076f566cdf9bd394dd2a7f296e8ff68c20e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3c3feb710bcfa1d8a7d55a99fe1665bc110f8b03e134f52c9ebbde201fc1bc3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c3feb710bcfa1d8a7d55a99fe1665bc110f8b03e134f52c9ebbde201fc1bc3f->enter($__internal_3c3feb710bcfa1d8a7d55a99fe1665bc110f8b03e134f52c9ebbde201fc1bc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_3c3feb710bcfa1d8a7d55a99fe1665bc110f8b03e134f52c9ebbde201fc1bc3f->leave($__internal_3c3feb710bcfa1d8a7d55a99fe1665bc110f8b03e134f52c9ebbde201fc1bc3f_prof);

        
        $__internal_b8758ab65dcbb4d10260f99ef2b076f566cdf9bd394dd2a7f296e8ff68c20e77->leave($__internal_b8758ab65dcbb4d10260f99ef2b076f566cdf9bd394dd2a7f296e8ff68c20e77_prof);

    }

    public function getTemplateName()
    {
        return "::baseList.html.twig";
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
       

{% endblock %}  ", "::baseList.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/baseList.html.twig");
    }
}

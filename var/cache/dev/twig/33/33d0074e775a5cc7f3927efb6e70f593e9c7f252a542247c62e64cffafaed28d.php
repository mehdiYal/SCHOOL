<?php

/* baseList.html.twig */
class __TwigTemplate_48e9405c044bb1a3d69f95955f66215a44150107b9172e79ea8ccb48c46a1e47 extends Twig_Template
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
        $__internal_e177fe4b78558b65ba04f0a1900b7a54718ebb76c11d442747784837a6ee742d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e177fe4b78558b65ba04f0a1900b7a54718ebb76c11d442747784837a6ee742d->enter($__internal_e177fe4b78558b65ba04f0a1900b7a54718ebb76c11d442747784837a6ee742d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseList.html.twig"));

        $__internal_82b92fc8da02af412283003bb86b2beffd16b21d248e2608c15233806ad79cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b92fc8da02af412283003bb86b2beffd16b21d248e2608c15233806ad79cb7->enter($__internal_82b92fc8da02af412283003bb86b2beffd16b21d248e2608c15233806ad79cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e177fe4b78558b65ba04f0a1900b7a54718ebb76c11d442747784837a6ee742d->leave($__internal_e177fe4b78558b65ba04f0a1900b7a54718ebb76c11d442747784837a6ee742d_prof);

        
        $__internal_82b92fc8da02af412283003bb86b2beffd16b21d248e2608c15233806ad79cb7->leave($__internal_82b92fc8da02af412283003bb86b2beffd16b21d248e2608c15233806ad79cb7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_df058a758f57fb658d73180ad87181daa6cbbe108e874b54204cbfc78fbfdd06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df058a758f57fb658d73180ad87181daa6cbbe108e874b54204cbfc78fbfdd06->enter($__internal_df058a758f57fb658d73180ad87181daa6cbbe108e874b54204cbfc78fbfdd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4db19ae92710a4e5c6657e59f5cf450c94c5d25ae1a4a75a0340976e84dd753c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4db19ae92710a4e5c6657e59f5cf450c94c5d25ae1a4a75a0340976e84dd753c->enter($__internal_4db19ae92710a4e5c6657e59f5cf450c94c5d25ae1a4a75a0340976e84dd753c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4db19ae92710a4e5c6657e59f5cf450c94c5d25ae1a4a75a0340976e84dd753c->leave($__internal_4db19ae92710a4e5c6657e59f5cf450c94c5d25ae1a4a75a0340976e84dd753c_prof);

        
        $__internal_df058a758f57fb658d73180ad87181daa6cbbe108e874b54204cbfc78fbfdd06->leave($__internal_df058a758f57fb658d73180ad87181daa6cbbe108e874b54204cbfc78fbfdd06_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_117f4c554307f504c1adffa5a9b6ae00b92b779ac7dfd58245afc1b6c3b08b96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_117f4c554307f504c1adffa5a9b6ae00b92b779ac7dfd58245afc1b6c3b08b96->enter($__internal_117f4c554307f504c1adffa5a9b6ae00b92b779ac7dfd58245afc1b6c3b08b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2745bd10cc4836d7356a4dfffedb11735f1dddb4b222beaeefbbc1d6663d9240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2745bd10cc4836d7356a4dfffedb11735f1dddb4b222beaeefbbc1d6663d9240->enter($__internal_2745bd10cc4836d7356a4dfffedb11735f1dddb4b222beaeefbbc1d6663d9240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2745bd10cc4836d7356a4dfffedb11735f1dddb4b222beaeefbbc1d6663d9240->leave($__internal_2745bd10cc4836d7356a4dfffedb11735f1dddb4b222beaeefbbc1d6663d9240_prof);

        
        $__internal_117f4c554307f504c1adffa5a9b6ae00b92b779ac7dfd58245afc1b6c3b08b96->leave($__internal_117f4c554307f504c1adffa5a9b6ae00b92b779ac7dfd58245afc1b6c3b08b96_prof);

    }

    // line 37
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_6afc4ba222374f2b79f7b7f28b789ca13ea55dd7ca22b49411559628e345a0bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6afc4ba222374f2b79f7b7f28b789ca13ea55dd7ca22b49411559628e345a0bc->enter($__internal_6afc4ba222374f2b79f7b7f28b789ca13ea55dd7ca22b49411559628e345a0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_80d9a4ae9fc5c957cfeff38a7c96996092fef09ce7a7e6484ac5450f75fbcade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80d9a4ae9fc5c957cfeff38a7c96996092fef09ce7a7e6484ac5450f75fbcade->enter($__internal_80d9a4ae9fc5c957cfeff38a7c96996092fef09ce7a7e6484ac5450f75fbcade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 38
        echo "                           ";
        
        $__internal_80d9a4ae9fc5c957cfeff38a7c96996092fef09ce7a7e6484ac5450f75fbcade->leave($__internal_80d9a4ae9fc5c957cfeff38a7c96996092fef09ce7a7e6484ac5450f75fbcade_prof);

        
        $__internal_6afc4ba222374f2b79f7b7f28b789ca13ea55dd7ca22b49411559628e345a0bc->leave($__internal_6afc4ba222374f2b79f7b7f28b789ca13ea55dd7ca22b49411559628e345a0bc_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d7d911cc47a8f10eb52d8ae16849c2d192f4fc4a90b63c37cf0acead7f34b7d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7d911cc47a8f10eb52d8ae16849c2d192f4fc4a90b63c37cf0acead7f34b7d8->enter($__internal_d7d911cc47a8f10eb52d8ae16849c2d192f4fc4a90b63c37cf0acead7f34b7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_aa4bd183e04655b5d39691e29d9cb3719eec40555b2b4c8f15679bae23846dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa4bd183e04655b5d39691e29d9cb3719eec40555b2b4c8f15679bae23846dd8->enter($__internal_aa4bd183e04655b5d39691e29d9cb3719eec40555b2b4c8f15679bae23846dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_aa4bd183e04655b5d39691e29d9cb3719eec40555b2b4c8f15679bae23846dd8->leave($__internal_aa4bd183e04655b5d39691e29d9cb3719eec40555b2b4c8f15679bae23846dd8_prof);

        
        $__internal_d7d911cc47a8f10eb52d8ae16849c2d192f4fc4a90b63c37cf0acead7f34b7d8->leave($__internal_d7d911cc47a8f10eb52d8ae16849c2d192f4fc4a90b63c37cf0acead7f34b7d8_prof);

    }

    // line 58
    public function block_active($context, array $blocks = array())
    {
        $__internal_f51219568e71c3e9e7bb299b123f4d56f7939296de4a2fdbf6e710389e5a1081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f51219568e71c3e9e7bb299b123f4d56f7939296de4a2fdbf6e710389e5a1081->enter($__internal_f51219568e71c3e9e7bb299b123f4d56f7939296de4a2fdbf6e710389e5a1081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_9205a57a3c88ff9da186ef78f30e20edd688a8e4c8db2e6baa630b0c44aa56a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9205a57a3c88ff9da186ef78f30e20edd688a8e4c8db2e6baa630b0c44aa56a6->enter($__internal_9205a57a3c88ff9da186ef78f30e20edd688a8e4c8db2e6baa630b0c44aa56a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 59
        echo "    ";
        
        $__internal_9205a57a3c88ff9da186ef78f30e20edd688a8e4c8db2e6baa630b0c44aa56a6->leave($__internal_9205a57a3c88ff9da186ef78f30e20edd688a8e4c8db2e6baa630b0c44aa56a6_prof);

        
        $__internal_f51219568e71c3e9e7bb299b123f4d56f7939296de4a2fdbf6e710389e5a1081->leave($__internal_f51219568e71c3e9e7bb299b123f4d56f7939296de4a2fdbf6e710389e5a1081_prof);

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
       

{% endblock %}  ", "baseList.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/baseList.html.twig");
    }
}

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
            'active' => array($this, 'block_active'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68e7bd799716b6b38bb523d539d8a10cf854313974942c91f05883d79b76651a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68e7bd799716b6b38bb523d539d8a10cf854313974942c91f05883d79b76651a->enter($__internal_68e7bd799716b6b38bb523d539d8a10cf854313974942c91f05883d79b76651a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseList.html.twig"));

        $__internal_c14b1481934757b863c4063c0ddaea006592cc5328f48b49a30f950ceea2c831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14b1481934757b863c4063c0ddaea006592cc5328f48b49a30f950ceea2c831->enter($__internal_c14b1481934757b863c4063c0ddaea006592cc5328f48b49a30f950ceea2c831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68e7bd799716b6b38bb523d539d8a10cf854313974942c91f05883d79b76651a->leave($__internal_68e7bd799716b6b38bb523d539d8a10cf854313974942c91f05883d79b76651a_prof);

        
        $__internal_c14b1481934757b863c4063c0ddaea006592cc5328f48b49a30f950ceea2c831->leave($__internal_c14b1481934757b863c4063c0ddaea006592cc5328f48b49a30f950ceea2c831_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b532f31142a997cdd66287e07bf36b925192a3ffef26fbf0c5739cfa3564d0a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b532f31142a997cdd66287e07bf36b925192a3ffef26fbf0c5739cfa3564d0a1->enter($__internal_b532f31142a997cdd66287e07bf36b925192a3ffef26fbf0c5739cfa3564d0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a421d50f82799b9956b78cd5c36d7187b0056fe6a96211de873ab37e51a0ad12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a421d50f82799b9956b78cd5c36d7187b0056fe6a96211de873ab37e51a0ad12->enter($__internal_a421d50f82799b9956b78cd5c36d7187b0056fe6a96211de873ab37e51a0ad12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a421d50f82799b9956b78cd5c36d7187b0056fe6a96211de873ab37e51a0ad12->leave($__internal_a421d50f82799b9956b78cd5c36d7187b0056fe6a96211de873ab37e51a0ad12_prof);

        
        $__internal_b532f31142a997cdd66287e07bf36b925192a3ffef26fbf0c5739cfa3564d0a1->leave($__internal_b532f31142a997cdd66287e07bf36b925192a3ffef26fbf0c5739cfa3564d0a1_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_61b0c21eb1694c95dcb022faa80af67ab3a0b7f57848860d38ed9ba955245970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61b0c21eb1694c95dcb022faa80af67ab3a0b7f57848860d38ed9ba955245970->enter($__internal_61b0c21eb1694c95dcb022faa80af67ab3a0b7f57848860d38ed9ba955245970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_16d6ec2938e5ec85731d6d1b37842a8b979c2207d96d7b3a8c18342899399b98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16d6ec2938e5ec85731d6d1b37842a8b979c2207d96d7b3a8c18342899399b98->enter($__internal_16d6ec2938e5ec85731d6d1b37842a8b979c2207d96d7b3a8c18342899399b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_16d6ec2938e5ec85731d6d1b37842a8b979c2207d96d7b3a8c18342899399b98->leave($__internal_16d6ec2938e5ec85731d6d1b37842a8b979c2207d96d7b3a8c18342899399b98_prof);

        
        $__internal_61b0c21eb1694c95dcb022faa80af67ab3a0b7f57848860d38ed9ba955245970->leave($__internal_61b0c21eb1694c95dcb022faa80af67ab3a0b7f57848860d38ed9ba955245970_prof);

    }

    // line 37
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_495cf1dfe3ce27a0498a208950c95b5653f4a3ae0c39e53d374787148987cf49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_495cf1dfe3ce27a0498a208950c95b5653f4a3ae0c39e53d374787148987cf49->enter($__internal_495cf1dfe3ce27a0498a208950c95b5653f4a3ae0c39e53d374787148987cf49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_d9b0620fdbde0c8ecc69f2141297e73dbb61e182aedfba2d1236dd7d88066d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b0620fdbde0c8ecc69f2141297e73dbb61e182aedfba2d1236dd7d88066d40->enter($__internal_d9b0620fdbde0c8ecc69f2141297e73dbb61e182aedfba2d1236dd7d88066d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 38
        echo "                           ";
        
        $__internal_d9b0620fdbde0c8ecc69f2141297e73dbb61e182aedfba2d1236dd7d88066d40->leave($__internal_d9b0620fdbde0c8ecc69f2141297e73dbb61e182aedfba2d1236dd7d88066d40_prof);

        
        $__internal_495cf1dfe3ce27a0498a208950c95b5653f4a3ae0c39e53d374787148987cf49->leave($__internal_495cf1dfe3ce27a0498a208950c95b5653f4a3ae0c39e53d374787148987cf49_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d72dcec771f0b6a4850885bed38625a605c60ba50a0f75130781f15c0a4d8910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d72dcec771f0b6a4850885bed38625a605c60ba50a0f75130781f15c0a4d8910->enter($__internal_d72dcec771f0b6a4850885bed38625a605c60ba50a0f75130781f15c0a4d8910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_313ce6b658ef14d41fc46ca1402ddee576c44fc68244b59baf16486bfd30ee34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_313ce6b658ef14d41fc46ca1402ddee576c44fc68244b59baf16486bfd30ee34->enter($__internal_313ce6b658ef14d41fc46ca1402ddee576c44fc68244b59baf16486bfd30ee34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_313ce6b658ef14d41fc46ca1402ddee576c44fc68244b59baf16486bfd30ee34->leave($__internal_313ce6b658ef14d41fc46ca1402ddee576c44fc68244b59baf16486bfd30ee34_prof);

        
        $__internal_d72dcec771f0b6a4850885bed38625a605c60ba50a0f75130781f15c0a4d8910->leave($__internal_d72dcec771f0b6a4850885bed38625a605c60ba50a0f75130781f15c0a4d8910_prof);

    }

    // line 58
    public function block_active($context, array $blocks = array())
    {
        $__internal_48a5850829c7bc0268cd847fce4d50fb03b8e28956b8c9075a99700c61a67380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48a5850829c7bc0268cd847fce4d50fb03b8e28956b8c9075a99700c61a67380->enter($__internal_48a5850829c7bc0268cd847fce4d50fb03b8e28956b8c9075a99700c61a67380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_9ae10d1ca508617b5971390a8e51cdd5e9e5267912b3827a548d75685de0251e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ae10d1ca508617b5971390a8e51cdd5e9e5267912b3827a548d75685de0251e->enter($__internal_9ae10d1ca508617b5971390a8e51cdd5e9e5267912b3827a548d75685de0251e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 59
        echo "    ";
        
        $__internal_9ae10d1ca508617b5971390a8e51cdd5e9e5267912b3827a548d75685de0251e->leave($__internal_9ae10d1ca508617b5971390a8e51cdd5e9e5267912b3827a548d75685de0251e_prof);

        
        $__internal_48a5850829c7bc0268cd847fce4d50fb03b8e28956b8c9075a99700c61a67380->leave($__internal_48a5850829c7bc0268cd847fce4d50fb03b8e28956b8c9075a99700c61a67380_prof);

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

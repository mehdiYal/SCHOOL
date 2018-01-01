<?php

/* baseListSuper.html.twig */
class __TwigTemplate_7d6e53cae881b1c7eefd6adf84e2a76646dc454fdd9066516e1763ddd3adee30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseSuper.html.twig", "baseListSuper.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'title' => array($this, 'block_title'),
            'bodyList' => array($this, 'block_bodyList'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseSuper.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f09775a6df792070c0da4a583a9e8ae2d00a2de2c1cc6a3c2e429bd1820f71e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f09775a6df792070c0da4a583a9e8ae2d00a2de2c1cc6a3c2e429bd1820f71e->enter($__internal_3f09775a6df792070c0da4a583a9e8ae2d00a2de2c1cc6a3c2e429bd1820f71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseListSuper.html.twig"));

        $__internal_35f82ddeda3943b109f5352c5ae4475147358925d8a23ca9b84e131907c69015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f82ddeda3943b109f5352c5ae4475147358925d8a23ca9b84e131907c69015->enter($__internal_35f82ddeda3943b109f5352c5ae4475147358925d8a23ca9b84e131907c69015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseListSuper.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f09775a6df792070c0da4a583a9e8ae2d00a2de2c1cc6a3c2e429bd1820f71e->leave($__internal_3f09775a6df792070c0da4a583a9e8ae2d00a2de2c1cc6a3c2e429bd1820f71e_prof);

        
        $__internal_35f82ddeda3943b109f5352c5ae4475147358925d8a23ca9b84e131907c69015->leave($__internal_35f82ddeda3943b109f5352c5ae4475147358925d8a23ca9b84e131907c69015_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_34d0e8c02703d4a85b712a535ffa3d08b4e77cb2319a1ceeed6a10a1fc53d00a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34d0e8c02703d4a85b712a535ffa3d08b4e77cb2319a1ceeed6a10a1fc53d00a->enter($__internal_34d0e8c02703d4a85b712a535ffa3d08b4e77cb2319a1ceeed6a10a1fc53d00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_079f6255ac235262dcad0f03ec8016aabc6ad4ff70b07149e600911922b29d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_079f6255ac235262dcad0f03ec8016aabc6ad4ff70b07149e600911922b29d95->enter($__internal_079f6255ac235262dcad0f03ec8016aabc6ad4ff70b07149e600911922b29d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_079f6255ac235262dcad0f03ec8016aabc6ad4ff70b07149e600911922b29d95->leave($__internal_079f6255ac235262dcad0f03ec8016aabc6ad4ff70b07149e600911922b29d95_prof);

        
        $__internal_34d0e8c02703d4a85b712a535ffa3d08b4e77cb2319a1ceeed6a10a1fc53d00a->leave($__internal_34d0e8c02703d4a85b712a535ffa3d08b4e77cb2319a1ceeed6a10a1fc53d00a_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_cab1d0ce4224fc75b7fe72e9d7733864cb5346bf1533adefb2261b20344b3c9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cab1d0ce4224fc75b7fe72e9d7733864cb5346bf1533adefb2261b20344b3c9a->enter($__internal_cab1d0ce4224fc75b7fe72e9d7733864cb5346bf1533adefb2261b20344b3c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7e87ce9c327e61214e47f56400aa43549796076b6b700f8a3e668ffbdd6e94f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e87ce9c327e61214e47f56400aa43549796076b6b700f8a3e668ffbdd6e94f6->enter($__internal_7e87ce9c327e61214e47f56400aa43549796076b6b700f8a3e668ffbdd6e94f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7e87ce9c327e61214e47f56400aa43549796076b6b700f8a3e668ffbdd6e94f6->leave($__internal_7e87ce9c327e61214e47f56400aa43549796076b6b700f8a3e668ffbdd6e94f6_prof);

        
        $__internal_cab1d0ce4224fc75b7fe72e9d7733864cb5346bf1533adefb2261b20344b3c9a->leave($__internal_cab1d0ce4224fc75b7fe72e9d7733864cb5346bf1533adefb2261b20344b3c9a_prof);

    }

    // line 37
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_f2905f899c30a66f11ca4dc2c1f798e29009467a19ed95ee6da23246d4c10dfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2905f899c30a66f11ca4dc2c1f798e29009467a19ed95ee6da23246d4c10dfe->enter($__internal_f2905f899c30a66f11ca4dc2c1f798e29009467a19ed95ee6da23246d4c10dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_2b3eb8c0320e4aac0e2bbc302576b1fce7fe756b87e7b9905f0ee7a651a071e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b3eb8c0320e4aac0e2bbc302576b1fce7fe756b87e7b9905f0ee7a651a071e4->enter($__internal_2b3eb8c0320e4aac0e2bbc302576b1fce7fe756b87e7b9905f0ee7a651a071e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 38
        echo "                           ";
        
        $__internal_2b3eb8c0320e4aac0e2bbc302576b1fce7fe756b87e7b9905f0ee7a651a071e4->leave($__internal_2b3eb8c0320e4aac0e2bbc302576b1fce7fe756b87e7b9905f0ee7a651a071e4_prof);

        
        $__internal_f2905f899c30a66f11ca4dc2c1f798e29009467a19ed95ee6da23246d4c10dfe->leave($__internal_f2905f899c30a66f11ca4dc2c1f798e29009467a19ed95ee6da23246d4c10dfe_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0345861c2651e0cb9134360989ef20e23303c8b71d858f8ae2427257a85ac2ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0345861c2651e0cb9134360989ef20e23303c8b71d858f8ae2427257a85ac2ff->enter($__internal_0345861c2651e0cb9134360989ef20e23303c8b71d858f8ae2427257a85ac2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_99a921a2bf148fbb4ef9043e5f29af0cdd5a0544e8a47c407ab5914f50b6e236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99a921a2bf148fbb4ef9043e5f29af0cdd5a0544e8a47c407ab5914f50b6e236->enter($__internal_99a921a2bf148fbb4ef9043e5f29af0cdd5a0544e8a47c407ab5914f50b6e236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_99a921a2bf148fbb4ef9043e5f29af0cdd5a0544e8a47c407ab5914f50b6e236->leave($__internal_99a921a2bf148fbb4ef9043e5f29af0cdd5a0544e8a47c407ab5914f50b6e236_prof);

        
        $__internal_0345861c2651e0cb9134360989ef20e23303c8b71d858f8ae2427257a85ac2ff->leave($__internal_0345861c2651e0cb9134360989ef20e23303c8b71d858f8ae2427257a85ac2ff_prof);

    }

    public function getTemplateName()
    {
        return "baseListSuper.html.twig";
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
        return new Twig_Source("{% extends 'baseSuper.html.twig' %}
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
       

{% endblock %}  ", "baseListSuper.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/baseListSuper.html.twig");
    }
}

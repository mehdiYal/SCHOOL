<?php

/* baseList.html.twig */
class __TwigTemplate_20d9701fd60dab2ce9619e589a505b6666b890b34a9f862b044e825e62e89b06 extends Twig_Template
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
        $__internal_bbfde26e92ccbdc6fe3b365fc78327649daf81520d5b3a191838171941dbbd80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbfde26e92ccbdc6fe3b365fc78327649daf81520d5b3a191838171941dbbd80->enter($__internal_bbfde26e92ccbdc6fe3b365fc78327649daf81520d5b3a191838171941dbbd80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseList.html.twig"));

        $__internal_fec6794418eb859f4337c36631eb089a3b335ffa48ab88e8d7e74761101366b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec6794418eb859f4337c36631eb089a3b335ffa48ab88e8d7e74761101366b5->enter($__internal_fec6794418eb859f4337c36631eb089a3b335ffa48ab88e8d7e74761101366b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbfde26e92ccbdc6fe3b365fc78327649daf81520d5b3a191838171941dbbd80->leave($__internal_bbfde26e92ccbdc6fe3b365fc78327649daf81520d5b3a191838171941dbbd80_prof);

        
        $__internal_fec6794418eb859f4337c36631eb089a3b335ffa48ab88e8d7e74761101366b5->leave($__internal_fec6794418eb859f4337c36631eb089a3b335ffa48ab88e8d7e74761101366b5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_417edca3ba91d8ab4c464c0f1ca2061559bc3c62dc42bbd94eb60446dde0dfeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_417edca3ba91d8ab4c464c0f1ca2061559bc3c62dc42bbd94eb60446dde0dfeb->enter($__internal_417edca3ba91d8ab4c464c0f1ca2061559bc3c62dc42bbd94eb60446dde0dfeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_26d5c0c07fdd889ee6e67094032b974fed15e20ee7146d7286af149256259fed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d5c0c07fdd889ee6e67094032b974fed15e20ee7146d7286af149256259fed->enter($__internal_26d5c0c07fdd889ee6e67094032b974fed15e20ee7146d7286af149256259fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_26d5c0c07fdd889ee6e67094032b974fed15e20ee7146d7286af149256259fed->leave($__internal_26d5c0c07fdd889ee6e67094032b974fed15e20ee7146d7286af149256259fed_prof);

        
        $__internal_417edca3ba91d8ab4c464c0f1ca2061559bc3c62dc42bbd94eb60446dde0dfeb->leave($__internal_417edca3ba91d8ab4c464c0f1ca2061559bc3c62dc42bbd94eb60446dde0dfeb_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f58f796a8566165d9a2a1b71d6423615b44de71c706a9c8faa7d20e3d475ed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f58f796a8566165d9a2a1b71d6423615b44de71c706a9c8faa7d20e3d475ed5->enter($__internal_3f58f796a8566165d9a2a1b71d6423615b44de71c706a9c8faa7d20e3d475ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3e111fef43bc9a3c1f2008987e9866ad3995ccc49250c839f0ae0deb854ead5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e111fef43bc9a3c1f2008987e9866ad3995ccc49250c839f0ae0deb854ead5b->enter($__internal_3e111fef43bc9a3c1f2008987e9866ad3995ccc49250c839f0ae0deb854ead5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3e111fef43bc9a3c1f2008987e9866ad3995ccc49250c839f0ae0deb854ead5b->leave($__internal_3e111fef43bc9a3c1f2008987e9866ad3995ccc49250c839f0ae0deb854ead5b_prof);

        
        $__internal_3f58f796a8566165d9a2a1b71d6423615b44de71c706a9c8faa7d20e3d475ed5->leave($__internal_3f58f796a8566165d9a2a1b71d6423615b44de71c706a9c8faa7d20e3d475ed5_prof);

    }

    // line 37
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_dc17025e206d2387ad839d14eb0dad1e1c9c9874ecddd698ca4151acd8169a17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc17025e206d2387ad839d14eb0dad1e1c9c9874ecddd698ca4151acd8169a17->enter($__internal_dc17025e206d2387ad839d14eb0dad1e1c9c9874ecddd698ca4151acd8169a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_6e4e0a9123b7839ef63d5bf4aaa3abe1237b55f377ecfd127e5bdbfbedf4f5c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e4e0a9123b7839ef63d5bf4aaa3abe1237b55f377ecfd127e5bdbfbedf4f5c0->enter($__internal_6e4e0a9123b7839ef63d5bf4aaa3abe1237b55f377ecfd127e5bdbfbedf4f5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 38
        echo "                           ";
        
        $__internal_6e4e0a9123b7839ef63d5bf4aaa3abe1237b55f377ecfd127e5bdbfbedf4f5c0->leave($__internal_6e4e0a9123b7839ef63d5bf4aaa3abe1237b55f377ecfd127e5bdbfbedf4f5c0_prof);

        
        $__internal_dc17025e206d2387ad839d14eb0dad1e1c9c9874ecddd698ca4151acd8169a17->leave($__internal_dc17025e206d2387ad839d14eb0dad1e1c9c9874ecddd698ca4151acd8169a17_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f3bd09fbf5d67f659d3b957778a75e8f4981670b74f4778bc8d63787026a8e6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3bd09fbf5d67f659d3b957778a75e8f4981670b74f4778bc8d63787026a8e6c->enter($__internal_f3bd09fbf5d67f659d3b957778a75e8f4981670b74f4778bc8d63787026a8e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1dc368fdf9e6c424b5c34ac6cce65775818e69083a98e6ee6b35ba22a73499f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dc368fdf9e6c424b5c34ac6cce65775818e69083a98e6ee6b35ba22a73499f9->enter($__internal_1dc368fdf9e6c424b5c34ac6cce65775818e69083a98e6ee6b35ba22a73499f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_1dc368fdf9e6c424b5c34ac6cce65775818e69083a98e6ee6b35ba22a73499f9->leave($__internal_1dc368fdf9e6c424b5c34ac6cce65775818e69083a98e6ee6b35ba22a73499f9_prof);

        
        $__internal_f3bd09fbf5d67f659d3b957778a75e8f4981670b74f4778bc8d63787026a8e6c->leave($__internal_f3bd09fbf5d67f659d3b957778a75e8f4981670b74f4778bc8d63787026a8e6c_prof);

    }

    // line 58
    public function block_active($context, array $blocks = array())
    {
        $__internal_63febc9e6283fbaf1c0c607c69e9bd3f2651202ec161c1de67622207a5c674be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63febc9e6283fbaf1c0c607c69e9bd3f2651202ec161c1de67622207a5c674be->enter($__internal_63febc9e6283fbaf1c0c607c69e9bd3f2651202ec161c1de67622207a5c674be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        $__internal_e31edbff0fa38eab0292b527a219b10742719e6122e939f16aca35db7bf91b22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e31edbff0fa38eab0292b527a219b10742719e6122e939f16aca35db7bf91b22->enter($__internal_e31edbff0fa38eab0292b527a219b10742719e6122e939f16aca35db7bf91b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "active"));

        // line 59
        echo "    ";
        
        $__internal_e31edbff0fa38eab0292b527a219b10742719e6122e939f16aca35db7bf91b22->leave($__internal_e31edbff0fa38eab0292b527a219b10742719e6122e939f16aca35db7bf91b22_prof);

        
        $__internal_63febc9e6283fbaf1c0c607c69e9bd3f2651202ec161c1de67622207a5c674be->leave($__internal_63febc9e6283fbaf1c0c607c69e9bd3f2651202ec161c1de67622207a5c674be_prof);

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

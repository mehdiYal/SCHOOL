<?php

/* :message:sentbox.html.twig */
class __TwigTemplate_d5f2d93fd6363bce3df869c561dee61f7e11be89818dd6f4e7b1c00aaad397ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(((twig_in_filter("ROLE_PARENT", $this->getAttribute($this->getAttribute(        // line 1
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()))) ? ("baseParent.html.twig") : ("base2.html.twig")), ":message:sentbox.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c5bfed7f479eb072c776bef70c47c7713633dd0b288d0d482c378fa864d3b27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c5bfed7f479eb072c776bef70c47c7713633dd0b288d0d482c378fa864d3b27->enter($__internal_7c5bfed7f479eb072c776bef70c47c7713633dd0b288d0d482c378fa864d3b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":message:sentbox.html.twig"));

        $__internal_2fbc671c7594eab30918e5b6f6c8ae7b483c030545d144d59a9fa260aeb84724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fbc671c7594eab30918e5b6f6c8ae7b483c030545d144d59a9fa260aeb84724->enter($__internal_2fbc671c7594eab30918e5b6f6c8ae7b483c030545d144d59a9fa260aeb84724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":message:sentbox.html.twig"));

        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c5bfed7f479eb072c776bef70c47c7713633dd0b288d0d482c378fa864d3b27->leave($__internal_7c5bfed7f479eb072c776bef70c47c7713633dd0b288d0d482c378fa864d3b27_prof);

        
        $__internal_2fbc671c7594eab30918e5b6f6c8ae7b483c030545d144d59a9fa260aeb84724->leave($__internal_2fbc671c7594eab30918e5b6f6c8ae7b483c030545d144d59a9fa260aeb84724_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_71f791140c17a9a73059060c2937d27de19c584d8a3cc47ee2ec1505afd488b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71f791140c17a9a73059060c2937d27de19c584d8a3cc47ee2ec1505afd488b6->enter($__internal_71f791140c17a9a73059060c2937d27de19c584d8a3cc47ee2ec1505afd488b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_33388b21fedbea376990d6e50720a15a154f57ceae0f9c5495a2553e257d67cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33388b21fedbea376990d6e50720a15a154f57ceae0f9c5495a2553e257d67cf->enter($__internal_33388b21fedbea376990d6e50720a15a154f57ceae0f9c5495a2553e257d67cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
                <!-- START CONTENT FRAME -->
                <div class=\"content-frame\">                                    
                    <!-- START CONTENT FRAME TOP -->
                    <div class=\"content-frame-top\">                        
                        <div class=\"page-title\">                    
                            <h2><span class=\"fa fa-inbox\"></span> Inbox <small>(";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["newMessages"]) ? $context["newMessages"] : $this->getContext($context, "newMessages")), "html", null, true);
        echo " unread)</small></h2>
                        </div>                                                                                
                        
                        <div class=\"pull-right\">                            
                            <button class=\"btn btn-default\"><span class=\"fa fa-cogs\"></span> Settings</button>
                            <button class=\"btn btn-default content-frame-left-toggle\"><span class=\"fa fa-bars\"></span></button>
                        </div>                        
                    </div>
                    <!-- END CONTENT FRAME TOP -->
                    
                    <!-- START CONTENT FRAME LEFT -->
                    <div class=\"content-frame-left\">
                        <div class=\"block\">
                            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_adressBook");
        echo "\" class=\"btn btn-danger btn-block btn-lg\"><span class=\"fa fa-edit\"></span> COMPOSE</a>
                        </div>
                        <div class=\"block\">
                            <div class=\"list-group border-bottom\">
                                <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_inbox");
        echo "\" class=\"list-group-item \"><span class=\"fa fa-inbox\"></span> Inbox <span class=\"badge badge-success\">";
        echo twig_escape_filter($this->env, (isset($context["newMessages"]) ? $context["newMessages"] : $this->getContext($context, "newMessages")), "html", null, true);
        echo "</span></a>
                                <!-- <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-star\"></span> Starred <span class=\"badge badge-warning\">6</span></a> -->
                                <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_sentbox");
        echo "\" class=\"list-group-item active\"><span class=\"fa fa-rocket\"></span> Sent</a>
                                <!-- <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-flag\"></span> Flagged</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-trash-o\"></span> Deleted <span class=\"badge badge-default\">1.4k</span></a>                             -->
                            </div>                        
                        </div>
                        <div class=\"block\">
                            <h4>Labels</h4>
                            <div class=\"list-group list-group-simple\">                                
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-circle text-success\"></span> Clients</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-circle text-warning\"></span> Social</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-circle text-danger\"></span> Work</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-circle text-info\"></span> Family</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-circle text-primary\"></span> Friends</a>
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT FRAME LEFT -->
                    
                    <!-- START CONTENT FRAME BODY -->
                    <div class=\"content-frame-body\">
                        
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <label class=\"check mail-checkall\">
                                    <input type=\"checkbox\" class=\"icheckbox\"/>
                                </label>
                                <div class=\"btn-group\">
                                    <button class=\"btn btn-default\"><span class=\"fa fa-mail-reply\"></span></button>
                                    <button class=\"btn btn-default\"><span class=\"fa fa-mail-reply-all\"></span></button>
                                    <button class=\"btn btn-default\"><span class=\"fa fa-mail-forward\"></span></button>
                                </div>
                                <div class=\"btn-group\">
                                    <button class=\"btn btn-default\"><span class=\"fa fa-star\"></span></button>                                    
                                    <button class=\"btn btn-default\"><span class=\"fa fa-flag\"></span></button>
                                </div>                                
                                <button class=\"btn btn-default\"><span class=\"fa fa-warning\"></span></button>
                                <button class=\"btn btn-default\"><span class=\"fa fa-trash-o\"></span></button>                                                                    
                                <div class=\"pull-right\" style=\"width: 150px;\">
                                    <div class=\"input-group\">
                                        <div class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></div>
                                        <input class=\"form-control datepicker\" type=\"text\" data-orientation=\"left\"/>                                    
                                    </div>
                                </div>
                            </div>
                            <div class=\"panel-body mail\">
                                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sentbox"]) ? $context["sentbox"] : $this->getContext($context, "sentbox")));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 77
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_show", array("id" => $this->getAttribute($context["msg"], "id", array()))), "html", null, true);
            echo "\">
                                    <div class=\"mail-item mail-unread mail-info\">                                    
                                        <div class=\"mail-checkbox\">
                                            <input type=\"checkbox\" class=\"icheckbox\"/>
                                        </div>
                                        <div class=\"mail-star\">
                                            <span class=\"fa fa-star-o\"></span>
                                        </div>
                                        <div class=\"mail-user\">";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["msg"], "createdBy", array()), "html", null, true);
            echo "</div>                                    
                                        <a href=\"pages-mailbox-message.html\" class=\"mail-text\">";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["msg"], "subject", array()), "html", null, true);
            echo "</a>                                    
                                        <div class=\"mail-date\">";
            // line 87
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["msg"], "createdAt", array()), "F jS \\a\\t g:ia"), "html", null, true);
            echo "</div>
                                    </div>
                                    </a>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                                   
                                
                            </div>
                            <div class=\"panel-footer\">                                
                                <div class=\"btn-group\">
                                    <button class=\"btn btn-default\"><span class=\"fa fa-mail-reply\"></span></button>
                                    <button class=\"btn btn-default\"><span class=\"fa fa-mail-reply-all\"></span></button>
                                    <button class=\"btn btn-default\"><span class=\"fa fa-mail-forward\"></span></button>
                                </div>
                                <div class=\"btn-group\">
                                    <button class=\"btn btn-default\"><span class=\"fa fa-star\"></span></button>                                    
                                    <button class=\"btn btn-default\"><span class=\"fa fa-flag\"></span></button>
                                </div>
                                
                                <button class=\"btn btn-default\"><span class=\"fa fa-warning\"></span></button>
                                <button class=\"btn btn-default\"><span class=\"fa fa-trash-o\"></span></button>                                    
                                
                                <ul class=\"pagination pagination-sm pull-right\">
                                    <li class=\"disabled\"><a href=\"#\">«</a></li>
                                    <li class=\"active\"><a href=\"#\">1</a></li>
                                    <li><a href=\"#\">2</a></li>
                                    <li><a href=\"#\">3</a></li>
                                    <li><a href=\"#\">4</a></li>                                    
                                    <li><a href=\"#\">»</a></li>
                                </ul>
                            </div>                            
                        </div>
                        
                    </div>
                    <!-- END CONTENT FRAME BODY -->
                </div>
                <!-- END CONTENT FRAME -->
                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class=\"message-box animated fadeIn\" data-sound=\"alert\" id=\"mb-signout\">
            <div class=\"mb-container\">
                <div class=\"mb-middle\">
                    <div class=\"mb-title\"><span class=\"fa fa-sign-out\"></span> Log <strong>Out</strong> ?</div>
                    <div class=\"mb-content\">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class=\"mb-footer\">
                        <div class=\"pull-right\">
                            <a href=\"pages-login.html\" class=\"btn btn-success btn-lg\">Yes</a>
                            <button class=\"btn btn-default btn-lg mb-control-close\">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->


";
        
        $__internal_33388b21fedbea376990d6e50720a15a154f57ceae0f9c5495a2553e257d67cf->leave($__internal_33388b21fedbea376990d6e50720a15a154f57ceae0f9c5495a2553e257d67cf_prof);

        
        $__internal_71f791140c17a9a73059060c2937d27de19c584d8a3cc47ee2ec1505afd488b6->leave($__internal_71f791140c17a9a73059060c2937d27de19c584d8a3cc47ee2ec1505afd488b6_prof);

    }

    // line 153
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c22d18f0e5bc23ef58c9168d2e7b3963ba35ad654407f6b18873223669863832 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c22d18f0e5bc23ef58c9168d2e7b3963ba35ad654407f6b18873223669863832->enter($__internal_c22d18f0e5bc23ef58c9168d2e7b3963ba35ad654407f6b18873223669863832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7f8b317a6fe9990c1168662729f6ec95f4ac92aff8dcfeb4d8096b440b4de27f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f8b317a6fe9990c1168662729f6ec95f4ac92aff8dcfeb4d8096b440b4de27f->enter($__internal_7f8b317a6fe9990c1168662729f6ec95f4ac92aff8dcfeb4d8096b440b4de27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 154
        echo "    <script type='text/javascript' src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/summernote/summernote.js"), "html", null, true);
        echo "\"></script>  
    <script type='text/javascript' src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tagsinput/jquery.tagsinput.min.js"), "html", null, true);
        echo "\"></script> 
    <script type='text/javascript' src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-select.js"), "html", null, true);
        echo "\"></script> 
    <script type='text/javascript' src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-file-input.js"), "html", null, true);
        echo "\"></script> 
       <script>
        \$('.active').removeClass('active');
        \$('.msg').addClass('active');
    </script>          

";
        
        $__internal_7f8b317a6fe9990c1168662729f6ec95f4ac92aff8dcfeb4d8096b440b4de27f->leave($__internal_7f8b317a6fe9990c1168662729f6ec95f4ac92aff8dcfeb4d8096b440b4de27f_prof);

        
        $__internal_c22d18f0e5bc23ef58c9168d2e7b3963ba35ad654407f6b18873223669863832->leave($__internal_c22d18f0e5bc23ef58c9168d2e7b3963ba35ad654407f6b18873223669863832_prof);

    }

    public function getTemplateName()
    {
        return ":message:sentbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 157,  258 => 156,  254 => 155,  249 => 154,  240 => 153,  171 => 91,  161 => 87,  157 => 86,  153 => 85,  141 => 77,  137 => 76,  89 => 31,  82 => 29,  75 => 25,  59 => 12,  51 => 6,  42 => 5,  32 => 3,  20 => 1,  19 => 3,);
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

                <!-- START CONTENT FRAME -->
                <div class=\"content-frame\">                                    
                    <!-- START CONTENT FRAME TOP -->
                    <div class=\"content-frame-top\">                        
                        <div class=\"page-title\">                    
                            <h2><span class=\"fa fa-inbox\"></span> Inbox <small>({{newMessages}} unread)</small></h2>
                        </div>                                                                                
                        
                        <div class=\"pull-right\">                            
                            <button class=\"btn btn-default\"><span class=\"fa fa-cogs\"></span> Settings</button>
                            <button class=\"btn btn-default content-frame-left-toggle\"><span class=\"fa fa-bars\"></span></button>
                        </div>                        
                    </div>
                    <!-- END CONTENT FRAME TOP -->
                    
                    <!-- START CONTENT FRAME LEFT -->
                    <div class=\"content-frame-left\">
                        <div class=\"block\">
                            <a href=\"{{ path('message_adressBook')}}\" class=\"btn btn-danger btn-block btn-lg\"><span class=\"fa fa-edit\"></span> COMPOSE</a>
                        </div>
                        <div class=\"block\">
                            <div class=\"list-group border-bottom\">
                                <a href=\"{{ path('message_inbox')}}\" class=\"list-group-item \"><span class=\"fa fa-inbox\"></span> Inbox <span class=\"badge badge-success\">{{newMessages}}</span></a>
                                <!-- <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-star\"></span> Starred <span class=\"badge badge-warning\">6</span></a> -->
                                <a href=\"{{ path('message_sentbox')}}\" class=\"list-group-item active\"><span class=\"fa fa-rocket\"></span> Sent</a>
                                <!-- <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-flag\"></span> Flagged</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-trash-o\"></span> Deleted <span class=\"badge badge-default\">1.4k</span></a>                             -->
                            </div>                        
                        </div>
                        <div class=\"block\">
                            <h4>Labels</h4>
                            <div class=\"list-group list-group-simple\">                                
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-circle text-success\"></span> Clients</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-circle text-warning\"></span> Social</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-circle text-danger\"></span> Work</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-circle text-info\"></span> Family</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-circle text-primary\"></span> Friends</a>
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT FRAME LEFT -->
                    
                    <!-- START CONTENT FRAME BODY -->
                    <div class=\"content-frame-body\">
                        
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <label class=\"check mail-checkall\">
                                    <input type=\"checkbox\" class=\"icheckbox\"/>
                                </label>
                                <div class=\"btn-group\">
                                    <button class=\"btn btn-default\"><span class=\"fa fa-mail-reply\"></span></button>
                                    <button class=\"btn btn-default\"><span class=\"fa fa-mail-reply-all\"></span></button>
                                    <button class=\"btn btn-default\"><span class=\"fa fa-mail-forward\"></span></button>
                                </div>
                                <div class=\"btn-group\">
                                    <button class=\"btn btn-default\"><span class=\"fa fa-star\"></span></button>                                    
                                    <button class=\"btn btn-default\"><span class=\"fa fa-flag\"></span></button>
                                </div>                                
                                <button class=\"btn btn-default\"><span class=\"fa fa-warning\"></span></button>
                                <button class=\"btn btn-default\"><span class=\"fa fa-trash-o\"></span></button>                                                                    
                                <div class=\"pull-right\" style=\"width: 150px;\">
                                    <div class=\"input-group\">
                                        <div class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></div>
                                        <input class=\"form-control datepicker\" type=\"text\" data-orientation=\"left\"/>                                    
                                    </div>
                                </div>
                            </div>
                            <div class=\"panel-body mail\">
                                {% for msg in sentbox %}
                                    <a href=\"{{ path('message_show',{'id':msg.id})}}\">
                                    <div class=\"mail-item mail-unread mail-info\">                                    
                                        <div class=\"mail-checkbox\">
                                            <input type=\"checkbox\" class=\"icheckbox\"/>
                                        </div>
                                        <div class=\"mail-star\">
                                            <span class=\"fa fa-star-o\"></span>
                                        </div>
                                        <div class=\"mail-user\">{{msg.createdBy}}</div>                                    
                                        <a href=\"pages-mailbox-message.html\" class=\"mail-text\">{{msg.subject}}</a>                                    
                                        <div class=\"mail-date\">{{msg.createdAt|date(\"F jS \\\\a\\\\t g:ia\")}}</div>
                                    </div>
                                    </a>
                                {% endfor %}
                                   
                                
                            </div>
                            <div class=\"panel-footer\">                                
                                <div class=\"btn-group\">
                                    <button class=\"btn btn-default\"><span class=\"fa fa-mail-reply\"></span></button>
                                    <button class=\"btn btn-default\"><span class=\"fa fa-mail-reply-all\"></span></button>
                                    <button class=\"btn btn-default\"><span class=\"fa fa-mail-forward\"></span></button>
                                </div>
                                <div class=\"btn-group\">
                                    <button class=\"btn btn-default\"><span class=\"fa fa-star\"></span></button>                                    
                                    <button class=\"btn btn-default\"><span class=\"fa fa-flag\"></span></button>
                                </div>
                                
                                <button class=\"btn btn-default\"><span class=\"fa fa-warning\"></span></button>
                                <button class=\"btn btn-default\"><span class=\"fa fa-trash-o\"></span></button>                                    
                                
                                <ul class=\"pagination pagination-sm pull-right\">
                                    <li class=\"disabled\"><a href=\"#\">«</a></li>
                                    <li class=\"active\"><a href=\"#\">1</a></li>
                                    <li><a href=\"#\">2</a></li>
                                    <li><a href=\"#\">3</a></li>
                                    <li><a href=\"#\">4</a></li>                                    
                                    <li><a href=\"#\">»</a></li>
                                </ul>
                            </div>                            
                        </div>
                        
                    </div>
                    <!-- END CONTENT FRAME BODY -->
                </div>
                <!-- END CONTENT FRAME -->
                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class=\"message-box animated fadeIn\" data-sound=\"alert\" id=\"mb-signout\">
            <div class=\"mb-container\">
                <div class=\"mb-middle\">
                    <div class=\"mb-title\"><span class=\"fa fa-sign-out\"></span> Log <strong>Out</strong> ?</div>
                    <div class=\"mb-content\">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class=\"mb-footer\">
                        <div class=\"pull-right\">
                            <a href=\"pages-login.html\" class=\"btn btn-success btn-lg\">Yes</a>
                            <button class=\"btn btn-default btn-lg mb-control-close\">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->


{% endblock %}


{% block javascripts %}
    <script type='text/javascript' src=\"{{ asset('js/plugins/summernote/summernote.js') }}\"></script>  
    <script type='text/javascript' src=\"{{ asset('js/plugins/tagsinput/jquery.tagsinput.min.js') }}\"></script> 
    <script type='text/javascript' src=\"{{ asset('js/plugins/bootstrap/bootstrap-select.js') }}\"></script> 
    <script type='text/javascript' src=\"{{ asset('js/plugins/bootstrap/bootstrap-file-input.js') }}\"></script> 
       <script>
        \$('.active').removeClass('active');
        \$('.msg').addClass('active');
    </script>          

{% endblock %}", ":message:sentbox.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/message/sentbox.html.twig");
    }
}

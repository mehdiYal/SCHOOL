<?php

/* :message:inbox.html.twig */
class __TwigTemplate_99b60fbd5ce423e7f0223bd49679ca478a08cf283587babc7f8d1fcf698dc01f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", ":message:inbox.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30eb760cd675a95bcc3908af50256fcb08d32fd8f3703914f691669efa22081d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30eb760cd675a95bcc3908af50256fcb08d32fd8f3703914f691669efa22081d->enter($__internal_30eb760cd675a95bcc3908af50256fcb08d32fd8f3703914f691669efa22081d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":message:inbox.html.twig"));

        $__internal_81351e67b45ec281a8b458215162ed9011ee1369bbab5b2c1833f6bbff3412a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81351e67b45ec281a8b458215162ed9011ee1369bbab5b2c1833f6bbff3412a7->enter($__internal_81351e67b45ec281a8b458215162ed9011ee1369bbab5b2c1833f6bbff3412a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":message:inbox.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30eb760cd675a95bcc3908af50256fcb08d32fd8f3703914f691669efa22081d->leave($__internal_30eb760cd675a95bcc3908af50256fcb08d32fd8f3703914f691669efa22081d_prof);

        
        $__internal_81351e67b45ec281a8b458215162ed9011ee1369bbab5b2c1833f6bbff3412a7->leave($__internal_81351e67b45ec281a8b458215162ed9011ee1369bbab5b2c1833f6bbff3412a7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_862095134721510bdae9d01e77614a724fde16c82bfdfb71bdd9aaad7824eb8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_862095134721510bdae9d01e77614a724fde16c82bfdfb71bdd9aaad7824eb8d->enter($__internal_862095134721510bdae9d01e77614a724fde16c82bfdfb71bdd9aaad7824eb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5ecbdaa974124d8824248c8bc2a910a5caf40508915d35fddf0af4baa5f3984b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ecbdaa974124d8824248c8bc2a910a5caf40508915d35fddf0af4baa5f3984b->enter($__internal_5ecbdaa974124d8824248c8bc2a910a5caf40508915d35fddf0af4baa5f3984b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
                <!-- START CONTENT FRAME -->
                <div class=\"content-frame\">                                    
                    <!-- START CONTENT FRAME TOP -->
                    <div class=\"content-frame-top\">                        
                        <div class=\"page-title\">                    
                            <h2><span class=\"fa fa-inbox\"></span> Inbox <small>(";
        // line 10
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
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_new");
        echo "\" class=\"btn btn-danger btn-block btn-lg\"><span class=\"fa fa-edit\"></span> COMPOSE</a>
                        </div>
                        <div class=\"block\">
                            <div class=\"list-group border-bottom\">
                                <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_inbox");
        echo "\" class=\"list-group-item active\"><span class=\"fa fa-inbox\"></span> Inbox <span class=\"badge badge-success\">";
        echo twig_escape_filter($this->env, (isset($context["newMessages"]) ? $context["newMessages"] : $this->getContext($context, "newMessages")), "html", null, true);
        echo "</span></a>
                               <!--  <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-star\"></span> Starred <span class=\"badge badge-warning\">6</span></a> -->
                                <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_sentbox");
        echo "\" class=\"list-group-item\"><span class=\"fa fa-rocket\"></span> Sent</a>
                               <!--  <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-flag\"></span> Flagged</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-trash-o\"></span> Deleted <span class=\"badge badge-default\">1.4k</span></a>   -->                          
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
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inbox"]) ? $context["inbox"] : $this->getContext($context, "inbox")));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 75
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
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["msg"], "createdBy", array()), "html", null, true);
            echo "</div>                                    
                                        <a href=\"pages-mailbox-message.html\" class=\"mail-text\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["msg"], "subject", array()), "html", null, true);
            echo "</a>                                    
                                        <div class=\"mail-date\">";
            // line 85
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["msg"], "createdAt", array()), "F jS \\a\\t g:ia"), "html", null, true);
            echo "</div>
                                    </div>
                                    </a>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
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
        
        $__internal_5ecbdaa974124d8824248c8bc2a910a5caf40508915d35fddf0af4baa5f3984b->leave($__internal_5ecbdaa974124d8824248c8bc2a910a5caf40508915d35fddf0af4baa5f3984b_prof);

        
        $__internal_862095134721510bdae9d01e77614a724fde16c82bfdfb71bdd9aaad7824eb8d->leave($__internal_862095134721510bdae9d01e77614a724fde16c82bfdfb71bdd9aaad7824eb8d_prof);

    }

    // line 151
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3af973f69f32d997e5717ac92b05cd0d25ac2dca90b8dae7184e0e9b8f95e1a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3af973f69f32d997e5717ac92b05cd0d25ac2dca90b8dae7184e0e9b8f95e1a4->enter($__internal_3af973f69f32d997e5717ac92b05cd0d25ac2dca90b8dae7184e0e9b8f95e1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_92a7b5aa4c85e12f30b9a5b2d2f26f560e74f47fddd24b2ec965a4efcdb83a83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a7b5aa4c85e12f30b9a5b2d2f26f560e74f47fddd24b2ec965a4efcdb83a83->enter($__internal_92a7b5aa4c85e12f30b9a5b2d2f26f560e74f47fddd24b2ec965a4efcdb83a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 152
        echo "    <script type='text/javascript' src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/summernote/summernote.js"), "html", null, true);
        echo "\"></script>  
    <script type='text/javascript' src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tagsinput/jquery.tagsinput.min.js"), "html", null, true);
        echo "\"></script> 
    <script type='text/javascript' src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-select.js"), "html", null, true);
        echo "\"></script> 
    <script type='text/javascript' src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-file-input.js"), "html", null, true);
        echo "\"></script>          

";
        
        $__internal_92a7b5aa4c85e12f30b9a5b2d2f26f560e74f47fddd24b2ec965a4efcdb83a83->leave($__internal_92a7b5aa4c85e12f30b9a5b2d2f26f560e74f47fddd24b2ec965a4efcdb83a83_prof);

        
        $__internal_3af973f69f32d997e5717ac92b05cd0d25ac2dca90b8dae7184e0e9b8f95e1a4->leave($__internal_3af973f69f32d997e5717ac92b05cd0d25ac2dca90b8dae7184e0e9b8f95e1a4_prof);

    }

    public function getTemplateName()
    {
        return ":message:inbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 155,  257 => 154,  253 => 153,  248 => 152,  239 => 151,  170 => 89,  160 => 85,  156 => 84,  152 => 83,  140 => 75,  136 => 74,  88 => 29,  81 => 27,  74 => 23,  58 => 10,  50 => 4,  41 => 3,  11 => 1,);
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
                            <a href=\"{{ path('message_new')}}\" class=\"btn btn-danger btn-block btn-lg\"><span class=\"fa fa-edit\"></span> COMPOSE</a>
                        </div>
                        <div class=\"block\">
                            <div class=\"list-group border-bottom\">
                                <a href=\"{{ path('message_inbox')}}\" class=\"list-group-item active\"><span class=\"fa fa-inbox\"></span> Inbox <span class=\"badge badge-success\">{{newMessages}}</span></a>
                               <!--  <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-star\"></span> Starred <span class=\"badge badge-warning\">6</span></a> -->
                                <a href=\"{{ path('message_sentbox')}}\" class=\"list-group-item\"><span class=\"fa fa-rocket\"></span> Sent</a>
                               <!--  <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-flag\"></span> Flagged</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-trash-o\"></span> Deleted <span class=\"badge badge-default\">1.4k</span></a>   -->                          
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
                                {% for msg in inbox %}
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

{% endblock %}", ":message:inbox.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources\\views/message/inbox.html.twig");
    }
}

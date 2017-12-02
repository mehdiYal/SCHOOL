<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9f579a794f7c9498e8b150b6fec5db9fd656599e809278d9031a4f35d2670800 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b875ff850cffe5bbb7910ec8e2a04cfffb1299e36d857e96aaa7a7fcfc81e80d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b875ff850cffe5bbb7910ec8e2a04cfffb1299e36d857e96aaa7a7fcfc81e80d->enter($__internal_b875ff850cffe5bbb7910ec8e2a04cfffb1299e36d857e96aaa7a7fcfc81e80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_c9ffff703baf37949b0efdce5cde61769d69697a8bfb3b58b262f61ff3ed2fc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9ffff703baf37949b0efdce5cde61769d69697a8bfb3b58b262f61ff3ed2fc2->enter($__internal_c9ffff703baf37949b0efdce5cde61769d69697a8bfb3b58b262f61ff3ed2fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b875ff850cffe5bbb7910ec8e2a04cfffb1299e36d857e96aaa7a7fcfc81e80d->leave($__internal_b875ff850cffe5bbb7910ec8e2a04cfffb1299e36d857e96aaa7a7fcfc81e80d_prof);

        
        $__internal_c9ffff703baf37949b0efdce5cde61769d69697a8bfb3b58b262f61ff3ed2fc2->leave($__internal_c9ffff703baf37949b0efdce5cde61769d69697a8bfb3b58b262f61ff3ed2fc2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}

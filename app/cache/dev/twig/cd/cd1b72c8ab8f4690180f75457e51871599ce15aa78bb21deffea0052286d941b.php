<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_04a33aa9acf061bccc35661697748eedaa69497cb3e3418ce3d224460d2b30de extends Twig_Template
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
        $__internal_29634f983cbe77b194f6c0ff33410d68910c149f0db9d3810a8a05d566ec7e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29634f983cbe77b194f6c0ff33410d68910c149f0db9d3810a8a05d566ec7e2a->enter($__internal_29634f983cbe77b194f6c0ff33410d68910c149f0db9d3810a8a05d566ec7e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_29634f983cbe77b194f6c0ff33410d68910c149f0db9d3810a8a05d566ec7e2a->leave($__internal_29634f983cbe77b194f6c0ff33410d68910c149f0db9d3810a8a05d566ec7e2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/ewa/Workspace/AddressBook/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}

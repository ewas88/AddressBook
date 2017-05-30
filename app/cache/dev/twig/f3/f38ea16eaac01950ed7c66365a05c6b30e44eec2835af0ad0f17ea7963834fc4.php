<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_5a1357b9e65dbf1834b32db16dce32bb37fd84dbff485a83d2fe6c658edd464f extends Twig_Template
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
        $__internal_bffa08f71025fce155c7e7dc0a9e24bb0cb046fac5dc1cecaaf09fb4eab0839e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bffa08f71025fce155c7e7dc0a9e24bb0cb046fac5dc1cecaaf09fb4eab0839e->enter($__internal_bffa08f71025fce155c7e7dc0a9e24bb0cb046fac5dc1cecaaf09fb4eab0839e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_bffa08f71025fce155c7e7dc0a9e24bb0cb046fac5dc1cecaaf09fb4eab0839e->leave($__internal_bffa08f71025fce155c7e7dc0a9e24bb0cb046fac5dc1cecaaf09fb4eab0839e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/ewa/Workspace/AddressBook/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}

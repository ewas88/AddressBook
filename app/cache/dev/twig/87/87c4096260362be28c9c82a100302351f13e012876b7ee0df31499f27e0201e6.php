<?php

/* AddressBookBundle:Person:showAll.html.twig */
class __TwigTemplate_bb72815cbf2d41ba4b68b26637fbfb7f4a53a71c37b0a992f12709e161c83f7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Person:showAll.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57d6401542323dc5366da46597570401535676fd2d4e6f55cd7fb59ed98c6b88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57d6401542323dc5366da46597570401535676fd2d4e6f55cd7fb59ed98c6b88->enter($__internal_57d6401542323dc5366da46597570401535676fd2d4e6f55cd7fb59ed98c6b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Person:showAll.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57d6401542323dc5366da46597570401535676fd2d4e6f55cd7fb59ed98c6b88->leave($__internal_57d6401542323dc5366da46597570401535676fd2d4e6f55cd7fb59ed98c6b88_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a81cb2b348ec492a9ed2c2553a40da69cd9e40dde83289fc963cb571afb4f55b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a81cb2b348ec492a9ed2c2553a40da69cd9e40dde83289fc963cb571afb4f55b->enter($__internal_a81cb2b348ec492a9ed2c2553a40da69cd9e40dde83289fc963cb571afb4f55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo "All people";
        echo " ";
        
        $__internal_a81cb2b348ec492a9ed2c2553a40da69cd9e40dde83289fc963cb571afb4f55b->leave($__internal_a81cb2b348ec492a9ed2c2553a40da69cd9e40dde83289fc963cb571afb4f55b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_97f9f402eb5a62f133790809723f46e08a518ae3cdc96a60a0caf1d2bbff29b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f9f402eb5a62f133790809723f46e08a518ae3cdc96a60a0caf1d2bbff29b3->enter($__internal_97f9f402eb5a62f133790809723f46e08a518ae3cdc96a60a0caf1d2bbff29b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <a href=\"/book/new\" style=\"font-size:20px\"
       class=\"w3-button w3-black w3-display-topright w3-padding-32 ex4\">Add new person</a>
    <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\" style=\"font-size:20px; float: right\"
       class=\"w3-button w3-black w3-display-topright w3-padding-32 ex5\">Log out</a>
    <h3 class=\"w3-container w3-grey\">ALL CONTACTS</h3>
    <div class=\"w3-container w3-lime\" style=\"font-size: x-large\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["persons"] ?? $this->getContext($context, "persons")));
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 14
            echo "            <p>
                <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "name", array()), "html", null, true);
            echo "</a> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "surname", array()), "html", null, true);
            echo " &nbsp
                <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "id", array()), "html", null, true);
            echo "/modify\" class=\"w3-button w3-black w3-hover-green w3-padding-small\">Modify</a>
                <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "id", array()), "html", null, true);
            echo "/delete\" class=\"w3-button w3-black w3-hover-red w3-padding-small\">Remove</a>
            </p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </div>

";
        
        $__internal_97f9f402eb5a62f133790809723f46e08a518ae3cdc96a60a0caf1d2bbff29b3->leave($__internal_97f9f402eb5a62f133790809723f46e08a518ae3cdc96a60a0caf1d2bbff29b3_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Person:showAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 20,  86 => 17,  82 => 16,  74 => 15,  71 => 14,  67 => 13,  60 => 9,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %} {{ 'All people' }} {% endblock %}

{% block body %}

    <a href=\"/book/new\" style=\"font-size:20px\"
       class=\"w3-button w3-black w3-display-topright w3-padding-32 ex4\">Add new person</a>
    <a href=\"{{ path('fos_user_security_logout') }}\" style=\"font-size:20px; float: right\"
       class=\"w3-button w3-black w3-display-topright w3-padding-32 ex5\">Log out</a>
    <h3 class=\"w3-container w3-grey\">ALL CONTACTS</h3>
    <div class=\"w3-container w3-lime\" style=\"font-size: x-large\">
        {% for person in persons %}
            <p>
                <a href=\"{{ person.id }}\">{{ person.name }}</a> {{ person.surname }} &nbsp
                <a href=\"{{ person.id }}/modify\" class=\"w3-button w3-black w3-hover-green w3-padding-small\">Modify</a>
                <a href=\"{{ person.id }}/delete\" class=\"w3-button w3-black w3-hover-red w3-padding-small\">Remove</a>
            </p>
        {% endfor %}
    </div>

{% endblock %}", "AddressBookBundle:Person:showAll.html.twig", "/home/ewa/Workspace/AddressBook/src/AddressBookBundle/Resources/views/Person/showAll.html.twig");
    }
}
